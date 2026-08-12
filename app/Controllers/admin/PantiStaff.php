<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PantiStaffModel;

class PantiStaff extends BaseController
{
    protected $staffModel;

    public function __construct()
    {
        $this->staffModel = new PantiStaffModel();
    }

    public function index()
    {
        $staffs = $this->staffModel->orderBy('id', 'ASC')->findAll();

        $data = [
            'title'        => 'Kelola Pengurus Panti - Admin Graphe Ministry',
            'header_title' => 'Kelola Staf Pengurus & Pelayan Panti',
            'staffs'       => $staffs,
        ];

        return view('admin/panti_staff/index', $data);
    }

    public function save()
    {
        $id = $this->request->getPost('id');

        $data = [
            'role_title' => $this->request->getPost('role_title'),
            'name'       => $this->request->getPost('name'),
            'icon'       => $this->request->getPost('icon') ?: 'bi-person-badge',
        ];

        if ($id) {
            $this->staffModel->update($id, $data);
            $msg = 'Data pengurus berhasil diperbarui!';
        } else {
            $this->staffModel->insert($data);
            $msg = 'Data pengurus baru berhasil ditambahkan!';
        }

        return redirect()->to(base_url('admin/panti-staff'))->with('message', $msg);
    }

    public function delete($id)
    {
        $this->staffModel->delete($id);
        return redirect()->to(base_url('admin/panti-staff'))->with('message', 'Data pengurus berhasil dihapus!');
    }
}