<?php

namespace App\Controllers;

use App\Models\VideoModel;

class Multimedia extends BaseController
{
    public function index()
    {
        $videoModel = new VideoModel();

        // 1. Ambil 1 video yang khusus diset Featured (is_featured = 1)
        // DIBUAT STRICT: Jika tidak ada yang is_featured = 1, biarkan null (tidak usah fallback ke video biasa)
        $featuredVideo = $videoModel->where('is_featured', 1)
                                    ->orderBy('id', 'DESC')
                                    ->first();

        // 2. Ambil seluruh daftar video untuk ditampilkan di Grid bawah
        $videos = $videoModel->orderBy('published_at', 'DESC')
                             ->orderBy('id', 'DESC')
                             ->findAll();

        $data = [
            'title'          => 'Video & Multimedia',
            'featured_video' => $featuredVideo,
            'videos'         => $videos
        ];

        return view('multimedia/videos', $data); // Pastikan path view sesuai dengan folder Anda
    }
}