<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contacts extends BaseController
{
    protected $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    // 1. Tampilkan Semua Pesan Masuk
    public function index()
    {
        $contacts = $this->contactModel->orderBy('id', 'DESC')->findAll();

        $data = [
            'title'        => 'Pesan Contact Us - Admin Graphe Ministry',
            'header_title' => 'Pesan Masuk (Contact Us)',
            'contacts'     => $contacts,
            'unread_count' => count(array_filter($contacts, fn($c) => $c['is_read'] == 0))
        ];

        return view('admin/contacts/index', $data);
    }

    // 2. Tandai Pesan Sudah Dibaca
    public function read($id)
    {
        $this->contactModel->update($id, ['is_read' => 1]);
        return redirect()->to(base_url('admin/contacts'));
    }

    // 3. Hapus Pesan
    public function delete($id)
    {
        $this->contactModel->delete($id);
        return redirect()->to(base_url('admin/contacts'))->with('message', 'Pesan berhasil dihapus.');
    }


    // 4. Balas Pesan
    public function reply()
    {
        $emailTo = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('reply_message');
        $id      = $this->request->getPost('id');

        // Inisialisasi Service Email CI4
        $email = \Config\Services::email();

        $email->setTo($emailTo);
        $email->setSubject('Re: ' . $subject);
        $email->setMessage(nl2br(esc($message)));

        if ($email->send()) {
            // Tandai pesan sudah dibaca/dibalas
            $this->contactModel->update($id, ['is_read' => 1]);
            return redirect()->to(base_url('admin/contacts'))->with('message', 'Balasan berhasil dikirimkan ke ' . $emailTo);
        } else {
            // Jika gagal kirim, tampilkan debugger
            $dataError = $email->printDebugger(['headers']);
            return redirect()->to(base_url('admin/contacts'))->with('error', 'Gagal mengirim email balasan.');
        }
    }
}