<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\ArticleModel;
use App\Models\AudioModel;
use App\Models\ContactModel;
use App\Models\ChurchModel;
use App\Models\PantiStaffModel;
use App\Models\FosterChildModel;
use App\Models\EventModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // Instansiasi Model
        $postModel       = new PostModel();
        $articleModel    = new ArticleModel();
        $audioModel      = new AudioModel();
        $contactModel    = new ContactModel();
        $churchModel     = new ChurchModel();
        $pantiStaffModel = new PantiStaffModel();
        $FosterChildModel   = new FosterChildModel();
        $eventModel      = new EventModel();

        // Hitung total data dinamis dari masing-masing tabel
        $data = [
            'title'             => 'Dashboard Admin - Graphe Ministry',
            'header_title'      => 'Dashboard Admin',
            'total_posts'       => $postModel->countAllResults(),
            'total_articles'    => $articleModel->countAllResults(),
            'total_audios'      => $audioModel->countAllResults(),
            'total_contacts'    => $contactModel->countAllResults(),
            'total_churches'    => $churchModel->countAllResults(),
            'total_panti_staff' => $pantiStaffModel->countAllResults(),
            'total_children'    => $FosterChildModel->countAllResults(),
            'total_events'      => $eventModel->countAllResults(),

            // Ambil 5 pesan masuk terbaru
            'latest_contacts'   => $contactModel->orderBy('created_at', 'DESC')->findAll(5),
        ];

        return view('admin/dashboard/dashboard', $data);
    }
}