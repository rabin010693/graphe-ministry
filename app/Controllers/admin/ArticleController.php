<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArticleModel;

class ArticleController extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        // Load helper text/url untuk membuat slug
        helper('text'); 
    }

    public function index()
    {
        $data = [
            'title'    => 'Kelola Artikel & Literatur',
            'articles' => $this->articleModel->orderBy('created_at', 'DESC')->findAll()
        ];

        return view('admin/articles/index', $data);
    }

    public function save()
    {
        $id = $this->request->getPost('id');

        $rules = [
            'category'     => 'required|in_list[book,tract,article]',
            'title_id'     => 'required|min_length[3]',
            'is_published' => 'required|in_list[0,1]',
        ];

        $filePdf = $this->request->getFile('pdf_file');
        if ($filePdf && $filePdf->isValid()) {
            $rules['pdf_file'] = 'mime_in[pdf_file,application/pdf]|max_size[pdf_file,20480]'; // Max 20MB
        }

        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'status'    => 'error',
                'message'   => implode('<br>', $this->validator->getErrors()),
                'tokenName' => csrf_token(),
                'tokenHash' => csrf_hash()
            ]);
        }

        // Ambil data lama jika Edit
        $existingItem = $id ? $this->articleModel->find($id) : null;

        // Generate Slug dari title_id
        $titleId = $this->request->getPost('title_id');
        $slug = url_title($titleId, '-', true);
        
        // Pastikan slug unik
        if (empty($id) || ($existingItem && $existingItem['title_id'] != $titleId)) {
            $originalSlug = $slug;
            $counter = 1;
            while ($this->articleModel->where('slug', $slug)->first()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
        } else {
            $slug = $existingItem['slug'];
        }

        // Proses PDF
        $fileName = $existingItem ? $existingItem['pdf_file'] : null;
        if ($filePdf && $filePdf->isValid() && !$filePdf->hasMoved()) {
            if ($existingItem && !empty($existingItem['pdf_file']) && file_exists(FCPATH . 'uploads/articles/' . $existingItem['pdf_file'])) {
                unlink(FCPATH . 'uploads/articles/' . $existingItem['pdf_file']);
            }
            $fileName = 'Literatur_' . $slug . '_' . time() . '.pdf';
            $filePdf->move(FCPATH . 'uploads/articles/', $fileName);
        }

        $dataSave = [
            'category'     => $this->request->getPost('category'),
            'title_id'     => $titleId,
            'title_en'     => $this->request->getPost('title_en'),
            'slug'         => $slug,
            'pdf_file'     => $fileName,
            'content_id'   => $this->request->getPost('content_id'),
            'content_en'   => $this->request->getPost('content_en'),
            'is_published' => $this->request->getPost('is_published'),
        ];

        if (!empty($id)) {
            $this->articleModel->update($id, $dataSave);
            $message = 'Literatur berhasil diperbarui.';
        } else {
            $this->articleModel->insert($dataSave);
            $message = 'Literatur berhasil ditambahkan.';
        }

        return $this->response->setJSON([
            'status'    => 'success',
            'message'   => $message,
            'tokenName' => csrf_token(),
            'tokenHash' => csrf_hash()
        ]);
    }

    public function delete($id)
    {
        $item = $this->articleModel->find($id);
        if ($item) {
            if (!empty($item['pdf_file']) && file_exists(FCPATH . 'uploads/articles/' . $item['pdf_file'])) {
                unlink(FCPATH . 'uploads/articles/' . $item['pdf_file']);
            }
            $this->articleModel->delete($id);
            return redirect()->to('/admin/articles')->with('message', 'Data berhasil dihapus.');
        }
        return redirect()->to('/admin/articles')->with('error', 'Data gagal dihapus.');
    }
}