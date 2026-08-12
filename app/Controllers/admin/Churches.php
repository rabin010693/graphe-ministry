<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ChurchModel;

class Churches extends BaseController
{
    protected $churchModel;

    public function __construct()
    {
        $this->churchModel = new ChurchModel();
    }

    public function index()
    {
        $churches = $this->churchModel->orderBy('region', 'ASC')->orderBy('id', 'ASC')->findAll();

        $data = [
            'title'    => 'Kelola Daftar Jemaat GBIA - Admin',
            'churches' => $churches,
        ];

        return view('admin/churches/index', $data);
    }

    public function save()
    {
        $csrfName = csrf_token();
        $csrfHash = csrf_hash();

        try {
            $id = $this->request->getPost('id');

            $data = [
                'region'      => $this->request->getPost('region'),
                'pastor_name' => $this->request->getPost('pastor_name'),
                'church_name' => $this->request->getPost('church_name'),
                'address'     => $this->request->getPost('address'),
                'phone'       => $this->request->getPost('phone'),
                'phone_2'     => $this->request->getPost('phone_2'),
            ];

            if ($id) {
                $this->churchModel->update($id, $data);
                $msg = 'Data gereja berhasil diperbarui!';
            } else {
                $this->churchModel->insert($data);
                $msg = 'Data gereja berhasil ditambahkan!';
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
        $this->churchModel->delete($id);
        return redirect()->to(base_url('admin/churches'))->with('message', 'Data gereja berhasil dihapus!');
    }
}