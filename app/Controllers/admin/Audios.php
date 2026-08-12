<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AudioModel;

class Audios extends BaseController
{
    protected $audioModel;

    public function __construct()
    {
        $this->audioModel = new AudioModel();
    }

    public function index()
    {
        $audios = $this->audioModel->orderBy('id', 'DESC')->findAll();

        $data = [
            'title'        => 'Kelola Audio Khotbah - Admin Graphe Ministry',
            'header_title' => 'Kelola Audio Khotbah (MP3)',
            'audios'       => $audios,
        ];

        return view('admin/audios/index', $data);
    }

    public function save()
    {
        // Set response header wajib berupa JSON
        $this->response->setHeader('Content-Type', 'application/json');

        try {
            $id        = $this->request->getPost('id');
            $audioType = $this->request->getPost('audio_type');
            $fileAudio = $this->request->getFile('audio_file_upload');
            $urlAudio  = $this->request->getPost('audio_url_external');

            $fileName = '';

            if ($audioType === 'file') {
                // Pengecekan jika file melebihi post_max_size / upload_max_filesize PHP
                if (empty($_FILES['audio_file_upload']['name']) && empty($id)) {
                    return $this->response->setStatusCode(400)->setJSON([
                        'status'  => 'error',
                        'message' => 'File audio tidak terdeteksi. Ukuran file mungkin melebihi batas upload_max_filesize di php.ini.'
                    ]);
                }

                if ($fileAudio && $fileAudio->getError() !== UPLOAD_ERR_NO_FILE) {
                    if ($fileAudio->isValid() && !$fileAudio->hasMoved()) {
                        $fileName = $fileAudio->getRandomName();
                        
                        $uploadPath = FCPATH . 'uploads/audio/';
                        if (!is_dir($uploadPath)) {
                            mkdir($uploadPath, 0777, true);
                        }

                        $fileAudio->move($uploadPath, $fileName);

                        // Hapus file lama jika update
                        if ($id) {
                            $oldData = $this->audioModel->find($id);
                            if ($oldData && $oldData['audio_type'] === 'file' && !empty($oldData['audio_file'])) {
                                $oldFilePath = $uploadPath . $oldData['audio_file'];
                                if (file_exists($oldFilePath)) {
                                    unlink($oldFilePath);
                                }
                            }
                        }
                    } else {
                        return $this->response->setStatusCode(400)->setJSON([
                            'status'  => 'error',
                            'message' => 'Gagal Upload: ' . $fileAudio->getErrorString()
                        ]);
                    }
                } else {
                    $fileName = $this->request->getPost('old_audio_file');
                }
            } else {
                $fileName = $urlAudio;
            }

            if (empty($fileName)) {
                return $this->response->setStatusCode(400)->setJSON([
                    'status'  => 'error',
                    'message' => 'File MP3 atau URL audio wajib diisi!'
                ]);
            }

            $data = [
                'title'      => $this->request->getPost('title'),
                'speaker'    => $this->request->getPost('speaker'),
                'category'   => $this->request->getPost('category'),
                'audio_type' => $audioType,
                'audio_file' => $fileName,
            ];

            if ($id) {
                $this->audioModel->update($id, $data);
                $msg = 'Audio khotbah berhasil diperbarui!';
            } else {
                $this->audioModel->insert($data);
                $msg = 'Audio khotbah berhasil ditambahkan!';
            }

            return $this->response->setJSON([
                'status'  => 'success',
                'message' => $msg
            ]);

        } catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status'  => 'error',
                'message' => 'Server Error: ' . $e->getMessage()
            ]);
        }
    }

    public function delete($id)
    {
        $audio = $this->audioModel->find($id);
        
        // Hapus file fisik jika bertipe upload lokal
        if ($audio && $audio['audio_type'] === 'file') {
            $filePath = FCPATH . 'uploads/audio/' . $audio['audio_file'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $this->audioModel->delete($id);
        return redirect()->to(base_url('admin/audios'))->with('message', 'Audio berhasil dihapus!');
    }
}