<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FosterChildModel;

class Children extends BaseController
{
    protected $childModel;

    public function __construct()
    {
        $this->childModel = new FosterChildModel();
    }

    public function index()
    {
        // Urutkan berdasarkan usia tertua hingga termuda
        $children = $this->childModel->orderBy('age', 'DESC')->findAll();

        $data = [
            'title'          => 'Kelola Anak Asuh - Admin Graphe Ministry',
            'header_title'   => 'Kelola Data Anak Asuh',
            'children'       => $children,
            'total_children' => count($children),
        ];

        return view('admin/children/index', $data);
    }

    public function save()
    {
        $id = $this->request->getPost('id');

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'age'       => $this->request->getPost('age'),
            'gender'    => $this->request->getPost('gender'),
            'education' => $this->request->getPost('education') ?: '-',
        ];

        if ($id) {
            $this->childModel->update($id, $data);
            $msg = 'Data anak asuh berhasil diperbarui!';
        } else {
            $this->childModel->insert($data);
            $msg = 'Data anak asuh berhasil ditambahkan!';
        }

        return redirect()->to(base_url('admin/children'))->with('message', $msg);
    }

    public function delete($id)
    {
        $this->childModel->delete($id);
        return redirect()->to(base_url('admin/children'))->with('message', 'Data anak asuh berhasil dihapus!');
    }
}