<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EventModel;

class Events extends BaseController
{
    protected $eventModel;

    public function __construct()
    {
        $this->eventModel = new EventModel();
    }

    public function index()
    {
        $events = $this->eventModel->orderBy('event_date', 'ASC')->findAll();

        $data = [
            'title'  => 'Kelola Program / Kalender Event - Admin',
            'events' => $events,
        ];

        return view('admin/events/index', $data);
    }

    public function save()
    {
        $csrfName = csrf_token();
        $csrfHash = csrf_hash();

        try {
            $id = $this->request->getPost('id');

            $data = [
                'title'       => $this->request->getPost('title'),
                'event_date'  => $this->request->getPost('event_date'),
                'event_time'  => $this->request->getPost('event_time'),
                'location'    => $this->request->getPost('location'),
                'description' => $this->request->getPost('description'),
            ];

            if ($id) {
                $this->eventModel->update($id, $data);
                $msg = 'Jadwal kegiatan berhasil diperbarui!';
            } else {
                $this->eventModel->insert($data);
                $msg = 'Jadwal kegiatan berhasil ditambahkan!';
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
        $this->eventModel->delete($id);
        return redirect()->to(base_url('admin/events'))->with('message', 'Jadwal kegiatan berhasil dihapus!');
    }
}