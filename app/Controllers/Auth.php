<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Jika sudah login, lempar langsung ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('admin/posts'));
        }

        return view('admin/login');
    }

    public function processLogin()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)
                          ->orWhere('email', $username)
                          ->first();

        if ($user) {
            // Verifikasi password yang di-hash
            if (password_verify($password, $user['password'])) {
                $sessionData = [
                    'user_id'   => $user['id'],
                    'username'  => $user['username'],
                    'name'      => $user['name'],
                    'role'      => $user['role'],
                    'logged_in' => true,
                ];
                $session->set($sessionData);
                return redirect()->to(base_url('admin/posts'))->with('message', 'Selamat datang kembali, ' . $user['name']);
            } else {
                return redirect()->back()->withInput()->with('error', 'Password yang Anda masukkan salah.');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Username/Email tidak ditemukan.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'))->with('message', 'Anda telah berhasil keluar.');
    }
}