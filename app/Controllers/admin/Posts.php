<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PostModel;

class Posts extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function index()
    {
        $role   = session()->get('role');
        $userId = session()->get('user_id');

        // Jika Role Penulis (author), tampilkan hanya postingan miliknya saja
        if ($role === 'author') {
            $posts = $this->postModel->where('user_id', $userId)->orderBy('id', 'DESC')->findAll();
        } else {
            // Admin Utama melihat semua postingan
            $posts = $this->postModel->orderBy('id', 'DESC')->findAll();
        }

        $data = [
            'title'          => 'Kelola Postingan - Admin Graphe Ministry',
            'header_title'   => 'Kelola Postingan',
            'posts'          => $posts,
            'stat_total'     => count($posts),
            'stat_published' => count(array_filter($posts, fn($p) => $p['status'] === 'Published')),
            'stat_pending'   => count(array_filter($posts, fn($p) => $p['status'] === 'Pending')),
            'stat_draft'     => count(array_filter($posts, fn($p) => $p['status'] === 'Draft'))
        ];

        return view('admin/posts/index', $data);
    }

    public function save()
    {
        $id     = $this->request->getPost('id');
        $title  = $this->request->getPost('title');
        $role   = session()->get('role');
        $status = $this->request->getPost('status');

        // Jika user adalah Penulis (author), status otomatis diset "Pending" untuk diajukan approval
        if ($role === 'author') {
            $status = 'Pending';
        }

        $data = [
            'user_id'  => session()->get('user_id'),
            'title'    => $title,
            'slug'     => url_title($title, '-', true),
            'category' => $this->request->getPost('category'),
            'author'   => session()->get('name'),
            'date'     => $this->request->getPost('date'),
            'excerpt'  => $this->request->getPost('excerpt'),
            'content'  => $this->request->getPost('content'),
            'status'   => $status ?? 'Pending',
        ];

        if ($id) {
            $this->postModel->update($id, $data);
            $msg = 'Postingan berhasil diperbarui!';
        } else {
            $this->postModel->insert($data);
            $msg = ($role === 'author') 
                ? 'Postingan telah diajukan dan menunggu persetujuan Admin Utama!' 
                : 'Postingan berhasil disimpan!';
        }

        return redirect()->to(base_url('admin/posts'))->with('message', $msg);
    }

    // Method khusus Admin Utama untuk Melakukan Approval / Persetujuan
    public function approve($id, $newStatus)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to(base_url('admin/posts'))->with('error', 'Akses ditolak!');
        }

        if (in_array($newStatus, ['Published', 'Rejected'])) {
            $this->postModel->update($id, ['status' => $newStatus]);
            return redirect()->to(base_url('admin/posts'))->with('message', 'Status postingan berhasil diubah menjadi ' . $newStatus);
        }

        return redirect()->to(base_url('admin/posts'));
    }

    public function delete($id)
    {
        $post = $this->postModel->find($id);
        
        // Penulis hanya boleh menghapus postingannya sendiri
        if (session()->get('role') === 'author' && $post['user_id'] != session()->get('user_id')) {
            return redirect()->to(base_url('admin/posts'))->with('error', 'Anda tidak memiliki hak akses untuk menghapus postingan ini.');
        }

        $this->postModel->delete($id);
        return redirect()->to(base_url('admin/posts'))->with('message', 'Postingan berhasil dihapus!');
    }
}