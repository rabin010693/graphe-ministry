<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VideoModel;

class Videos extends BaseController
{
    protected $videoModel;

    public function __construct()
    {
        $this->videoModel = new VideoModel();
    }

    public function index()
    {
        $data = [
            'title'        => 'Kelola Video & Multimedia',
            'header_title' => 'Daftar Video',
            'videos'       => $this->videoModel->orderBy('created_at', 'DESC')->findAll(),
        ];
        return view('admin/videos/index', $data);
    }

    public function create()
    {
        $data = [
            'title'        => 'Tambah Video Baru',
            'header_title' => 'Tambah Video',
        ];
        return view('admin/videos/create', $data);
    }

    public function save()
    {
        $id = $this->request->getPost('id');
        $rawUrl = $this->request->getPost('youtube_url');
        
        // Ekstrak YouTube ID
        $youtubeId = $this->videoModel->extractYoutubeId($rawUrl);

        if (!$youtubeId) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Link URL YouTube tidak valid.'
            ]);
        }

        $isFeatured = $this->request->getPost('is_featured') ? 1 : 0;

        // Jika diset sebagai featured, matikan status featured video lain
        if ($isFeatured === 1) {
            $this->videoModel->where('is_featured', 1)->set(['is_featured' => 0])->update();
        }

        $data = [
            'title'        => $this->request->getPost('title'),
            'youtube_url'  => $rawUrl,
            'youtube_id'   => $youtubeId,
            'category'     => $this->request->getPost('category'),
            'description'  => $this->request->getPost('description'),
            'is_featured'  => $isFeatured,
            'published_at' => $this->request->getPost('published_at') ?: date('Y-m-d'),
        ];

        if (!empty($id)) {
            $this->videoModel->update($id, $data);
            $message = 'Video berhasil diperbarui.';
        } else {
            $this->videoModel->save($data);
            $message = 'Video baru berhasil ditambahkan.';
        }

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => $message
        ]);
    }

    public function store()
    {
        $rawUrl = $this->request->getPost('youtube_url');
        $youtubeId = $this->videoModel->extractYoutubeId($rawUrl);

        if (!$youtubeId) {
            return redirect()->back()->withInput()->with('error', 'Link YouTube tidak valid. Harap periksa kembali URL.');
        }

        // Jika diset sebagai featured, matikan status featured video lain
        if ($this->request->getPost('is_featured')) {
            $this->videoModel->where('is_featured', 1)->set(['is_featured' => 0])->update();
        }

        $this->videoModel->save([
            'title'        => $this->request->getPost('title'),
            'youtube_url'  => $rawUrl,
            'youtube_id'   => $youtubeId,
            'category'     => $this->request->getPost('category'),
            'description'  => $this->request->getPost('description'),
            'is_featured'  => $this->request->getPost('is_featured') ? 1 : 0,
            'published_at' => $this->request->getPost('published_at') ?: date('Y-m-d'),
        ]);

        return redirect()->to(base_url('admin/videos'))->with('message', 'Video berhasil ditambahkan.');
    }

    public function delete($id)
    {
        $this->videoModel->delete($id);
        return redirect()->to(base_url('admin/videos'))->with('message', 'Video berhasil dihapus.');
    }
}