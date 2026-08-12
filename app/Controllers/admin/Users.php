<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // 1. Tampilkan Daftar User
    public function index()
    {
        $users = $this->userModel->orderBy('id', 'DESC')->findAll();

        $data = [
            'title'        => 'Kelola User - Admin Graphe Ministry',
            'header_title' => 'Kelola User & Hak Akses',
            'users'        => $users,
        ];

        return view('admin/users/index', $data);
    }

    // 2. Simpan User Baru / Edit User
    public function save()
    {
        $id       = $this->request->getPost('id');
        $username = $this->request->getPost('username');
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $name     = $this->request->getPost('name');
        $role     = $this->request->getPost('role');

        $data = [
            'username' => $username,
            'email'    => $email,
            'name'     => $name,
            'role'     => $role,
        ];

        // Jika password diisi (wajib untuk user baru, opsional saat edit)
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_BCRYPT);
        }

        if ($id) {
            $this->userModel->update($id, $data);
            $msg = 'Data user berhasil diperbarui!';
        } else {
            // Cek keunikan username & email
            $existing = $this->userModel->where('username', $username)->orWhere('email', $email)->first();
            if ($existing) {
                return redirect()->back()->withInput()->with('error', 'Username atau Email sudah terdaftar!');
            }

            $this->userModel->insert($data);
            $msg = 'User baru berhasil ditambahkan!';
        }

        return redirect()->to(base_url('admin/users'))->with('message', $msg);
    }

    // 3. Hapus User
    public function delete($id)
    {
        // Cegah admin menghapus akunnya sendiri yang sedang digunakan
        if ($id == session()->get('user_id')) {
            return redirect()->to(base_url('admin/users'))->with('error', 'Anda tidak dapat menghapus akun Anda sendiri saat sedang login!');
        }

        $this->userModel->delete($id);
        return redirect()->to(base_url('admin/users'))->with('message', 'User berhasil dihapus!');
    }
}