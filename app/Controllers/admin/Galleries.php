<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GalleryModel;

class Galleries extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index()
    {
        $galleries = $this->galleryModel->orderBy('event_date', 'DESC')->findAll();

        $data = [
            'title'     => 'Kelola Galeri Foto - Admin Graphe Ministry',
            'galleries' => $galleries,
        ];

        return view('admin/galleries/index', $data);
    }

    public function save()
    {
        $csrfName = csrf_token();
        $csrfHash = csrf_hash();

        try {
            $id          = $this->request->getPost('id');
            $title       = $this->request->getPost('title');
            $category    = $this->request->getPost('category');
            $eventDate   = $this->request->getPost('event_date');
            $description = $this->request->getPost('description');
            $fileImage   = $this->request->getFile('image_file');

            $fileName = '';
            $uploadPath = FCPATH . 'uploads/galeri/';

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            if ($fileImage && $fileImage->getError() !== UPLOAD_ERR_NO_FILE) {
                if ($fileImage->isValid() && !$fileImage->hasMoved()) {
                    $fileName = $fileImage->getRandomName();
                    $fileImage->move($uploadPath, $fileName);

                    // Jika update, hapus foto lama
                    if ($id) {
                        $oldData = $this->galleryModel->find($id);
                        if ($oldData && !empty($oldData['image'])) {
                            $oldFilePath = $uploadPath . $oldData['image'];
                            if (file_exists($oldFilePath)) {
                                unlink($oldFilePath);
                            }
                        }
                    }
                } else {
                    return $this->response->setStatusCode(400)->setJSON([
                        'status'    => 'error',
                        'message'   => 'Gagal Upload Gambar: ' . $fileImage->getErrorString(),
                        'tokenName' => $csrfName,
                        'tokenHash' => $csrfHash
                    ]);
                }
            } else {
                $fileName = $this->request->getPost('old_image');
            }

            if (empty($fileName)) {
                return $this->response->setStatusCode(400)->setJSON([
                    'status'    => 'error',
                    'message'   => 'Foto galeri wajib diunggah!',
                    'tokenName' => $csrfName,
                    'tokenHash' => $csrfHash
                ]);
            }

            $data = [
                'title'       => $title,
                'category'    => $category,
                'event_date'  => $eventDate,
                'description' => $description,
                'image'       => $fileName,
            ];

            if ($id) {
                $this->galleryModel->update($id, $data);
                $msg = 'Momen galeri berhasil diperbarui!';
            } else {
                $this->galleryModel->insert($data);
                $msg = 'Momen galeri berhasil ditambahkan!';
            }

            return $this->response->setJSON([
                'status'    => 'success',
                'message'   => $msg,
                'tokenName' => $csrfName,
                'tokenHash' => $csrfHash
            ]);

        } catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status'    => 'error',
                'message'   => 'Server Error: ' . $e->getMessage(),
                'tokenName' => $csrfName,
                'tokenHash' => $csrfHash
            ]);
        }
    }

    public function delete($id)
    {
        $gallery = $this->galleryModel->find($id);
        if ($gallery) {
            $filePath = FCPATH . 'uploads/galeri/' . $gallery['image'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $this->galleryModel->delete($id);
        }

        return redirect()->to(base_url('admin/galleries'))->with('message', 'Foto galeri berhasil dihapus!');
    }
}