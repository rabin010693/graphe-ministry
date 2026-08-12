<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PeriodicalModel;

class PedangRohController extends BaseController
{
    protected $periodicalModel;

    public function __construct()
    {
        $this->periodicalModel = new PeriodicalModel();
    }

    // Tampilkan daftar edisi di Dashboard Admin
    public function index()
    {
        $data = [
            'title'       => 'Kelola Buletin Pedang Roh',
            'periodicals' => $this->periodicalModel->orderBy('edition_number', 'DESC')->findAll()
        ];

        return view('admin/pedang_roh/index', $data);
    }

    // Single Handler untuk Tambah (Create) & Edit (Update) via AJAX Modal
    public function save()
    {
        $id = $this->request->getPost('id');

        // Rule dasar untuk semua input
        $rules = [
            'edition_number'     => 'required|numeric',
            'title_id'           => 'required|min_length[3]',
            'publish_month_year' => 'required',
        ];

        $filePdf = $this->request->getFile('pdf_file');

        // Jika Tambah Data Baru (ID Kosong), File PDF Wajib di-upload
        if (empty($id)) {
            $rules['pdf_file'] = 'uploaded[pdf_file]|mime_in[pdf_file,application/pdf]|max_size[pdf_file,20480]';
        } else {
            // Jika Edit Data (ID Ada), File PDF Opsional (hanya di-validasi jika user upload file baru)
            if ($filePdf && $filePdf->isValid()) {
                $rules['pdf_file'] = 'mime_in[pdf_file,application/pdf]|max_size[pdf_file,20480]';
            }
        }

        // Validasi Request
        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'status'    => 'error',
                'message'   => implode('<br>', $this->validator->getErrors()),
                'tokenName' => csrf_token(),
                'tokenHash' => csrf_hash()
            ]);
        }

        // Ambil data eksisting jika sedang Edit
        $existingItem = null;
        if (!empty($id)) {
            $existingItem = $this->periodicalModel->find($id);
            if (!$existingItem) {
                return $this->response->setJSON([
                    'status'    => 'error',
                    'message'   => 'Data edisi tidak ditemukan.',
                    'tokenName' => csrf_token(),
                    'tokenHash' => csrf_hash()
                ]);
            }
        }

        // Proses penanganan File PDF
        $fileName = $existingItem ? $existingItem['pdf_file'] : null;

        if ($filePdf && $filePdf->isValid() && !$filePdf->hasMoved()) {
            // Hapus file PDF lama jika sedang Edit
            if ($existingItem && !empty($existingItem['pdf_file']) && file_exists(FCPATH . 'uploads/pedang_roh/' . $existingItem['pdf_file'])) {
                unlink(FCPATH . 'uploads/pedang_roh/' . $existingItem['pdf_file']);
            }

            // Generate nama file baru
            $fileName = 'Pedang_Roh_Edisi_' . $this->request->getPost('edition_number') . '_' . time() . '.pdf';
            $filePdf->move(FCPATH . 'uploads/pedang_roh/', $fileName);
        }

        // Data yang akan disimpan ke database
        $dataSave = [
            'edition_number'     => $this->request->getPost('edition_number'),
            'title_id'           => $this->request->getPost('title_id'),
            'title_en'           => $this->request->getPost('title_en'),
            'publish_month_year' => $this->request->getPost('publish_month_year'),
            'pdf_file'           => $fileName,
        ];

        if (!empty($id)) {
            $this->periodicalModel->update($id, $dataSave);
            $message = 'Edisi Pedang Roh berhasil diperbarui.';
        } else {
            $this->periodicalModel->insert($dataSave);
            $message = 'Edisi Pedang Roh berhasil ditambahkan.';
        }

        return $this->response->setJSON([
            'status'    => 'success',
            'message'   => $message,
            'tokenName' => csrf_token(),
            'tokenHash' => csrf_hash()
        ]);
    }

    // Proses Hapus Data & File
    public function delete($id)
    {
        $item = $this->periodicalModel->find($id);
        if ($item) {
            if (!empty($item['pdf_file']) && file_exists(FCPATH . 'uploads/pedang_roh/' . $item['pdf_file'])) {
                unlink(FCPATH . 'uploads/pedang_roh/' . $item['pdf_file']);
            }
            $this->periodicalModel->delete($id);
            return redirect()->to('/admin/pedang-roh')->with('message', 'Data edisi berhasil dihapus.');
        }

        return redirect()->to('/admin/pedang-roh')->with('error', 'Data gagal dihapus.');
    }
}