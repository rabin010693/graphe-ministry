<?php

namespace App\Controllers;

use App\Models\ContactModel; // <-- Diimpor di bagian atas file
use App\Models\FosterChildModel;
use App\Models\PantiStaffModel;
use App\Models\AudioModel;
use App\Models\GalleryModel;
use App\Models\EventModel;
use App\Models\ChurchModel;
use App\Models\PeriodicalModel;
use App\Models\VideoModel;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('index', ['title' => 'Home - Graphe Ministry']);
    // }

    public function index(): string
    {
        $eventModel = new EventModel();

        // 1. Hitung tanggal awal minggu (Hari Minggu minggu ini)
        $startOfWeek = (date('w') == 0) ? date('Y-m-d') : date('Y-m-d', strtotime('last Sunday'));

        // 2. Hitung tanggal akhir minggu (Hari Sabtu minggu ini)
        $endOfWeek = date('Y-m-d', strtotime($startOfWeek . ' +6 days'));

        // 3. Filter event minggu ini & batasi maksimal 4 event
        $events = $eventModel->where('event_date >=', $startOfWeek)
                            ->where('event_date <=', $endOfWeek)
                            ->orderBy('event_date', 'ASC')
                            ->findAll(4); // <-- Membatasi maksimal 4 event

        $data = [
            'title'  => 'Home - Graphe Ministry',
            'events' => $events
        ];

        return view('index', $data);
    }

    public function about(): string
    {
        return view('about', ['title' => 'About Us - Graphe Ministry']);
    }

    public function contact(): string
    {
        return view('contact', ['title' => 'Contact Us - Graphe Ministry']);
    }

    //  FUNGSI ACARA TIDAK DINAMIS ATAU STATIS  //
    // public function events(): string
    // {
    //     return view('events', ['title' => 'Events - Graphe Ministry']);
    // }

    public function events(): string
    {
        $eventModel = new EventModel();

        // 1. Tentukan tanggal hari Minggu minggu ini (Awal Minggu)
        $startOfWeek = (date('w') == 0) ? date('Y-m-d') : date('Y-m-d', strtotime('last Sunday'));

        // 2. Tentukan tanggal hari Sabtu minggu ini (Akhir Minggu)
        $endOfWeek = date('Y-m-d', strtotime($startOfWeek . ' +6 days'));

        // 3. Filter event yang tanggalnya berada di antara Minggu dan Sabtu minggu ini
        $events = $eventModel->where('event_date >=', $startOfWeek)
                            ->where('event_date <=', $endOfWeek)
                            ->orderBy('event_date', 'ASC')
                            ->findAll();

        $data = [
            'title'       => 'Events - Graphe Ministry',
            'events'      => $events,
            'startOfWeek' => $startOfWeek,
            'endOfWeek'   => $endOfWeek
        ];

        return view('events', $data);
    }

    public function sermons(): string
    {
        return view('sermons', ['title' => 'Sermons - Graphe Ministry']);
    }

    public function ministries(): string
    {
        return view('ministries');
    }

    public function blog(): string
    {
        return view('blog');
    }

    public function sejarahGereja(): string
    {
        return view('gereja/sejarah_gbia', ['title' => 'Sejarah - Graphe Ministry']);
    }

    public function gembalaGereja(): string
    {
        return view('gereja/gembala_sidang', ['title' => 'Gembala Sidang - Graphe Ministry']);
    }

    public function imanGereja(): string
    {
        return view('gereja/pengakuan_iman', ['title' => 'Pengakuan Iman - Graphe Ministry']);
    }

    public function keselamatanGereja(): string
    {
        return view('gereja/jalan_keselamatan', ['title' => 'Jalan Keselamatan - Graphe Ministry']);
    }

    public function kebaktianGereja(): string
    {
        return view('gereja/jadwal_kebaktian', ['title' => 'Jadwal Kebaktian - Graphe Ministry']);
    }

    //  FUNGSI LIST GEREJA TIDAK DINAMIS ATAU STATIS  //
    // public function gerejaGereja(): string
    // {
    //     return view('gereja/gereja_lainnya', ['title' => 'GBIA Seluruh Indonesia - Graphe Ministry']);
    // }

    public function gerejaGereja(): string
    {
        $churchModel = new ChurchModel();
        $rawChurches = $churchModel->orderBy('id', 'ASC')->findAll();

        // Grouping data berdasarkan wilayah
        $churchesByRegion = [];
        foreach ($rawChurches as $church) {
            $churchesByRegion[$church['region']][] = $church;
        }

        $data = [
            'title'            => 'GBIA Seluruh Indonesia - Graphe Ministry',
            'churchesByRegion' => $churchesByRegion
        ];

        return view('gereja/gereja_lainnya', $data);
    }

    public function visimisiGits(): string
    {
        return view('gits/visi_misi', ['title' => 'Visi & Misi - Graphe Ministry']);
    }

    public function programGits(): string
    {
        return view('gits/program_studi', ['title' => 'Program Studi - Graphe Ministry']);
    }

    public function dosenGits(): string
    {
        return view('gits/dewan_dosen', ['title' => 'Dewan Dosen - Graphe Ministry']);
    }

    public function fasilitasGits(): string
    {
        return view('gits/fasilitas', ['title' => 'Fasilitas - Graphe Ministry']);
    }

    public function pendaftaranGits(): string
    {
        return view('gits/pendaftaran', ['title' => 'Register - Graphe Ministry']);
    }

    public function extensionGits(): string
    {
        return view('gits/program_extension', ['title' => 'Extension - Graphe Ministry']);
    }

    public function seminarGits(): string
    {
        return view('gits/info_seminar', ['title' => 'Seminar - Graphe Ministry']);
    }

    public function syaratKelulusanGits()
    {
        return view('gits/syarat_kelulusan');
    }

    public function mataKuliahGits()
    {
        return view('gits/mata_kuliah');
    }

    public function tentangPanti(): string
    {
        return view('panti-asuhan/karena_kasih', ['title' => 'Tentang - Graphe Ministry']);
    }


    //  FUNGSI Staff panti TIDAK DINAMIS ATAU STATIS  //
    // public function staffPanti(): string
    // {
    //     return view('panti-asuhan/staff_panti', ['title' => 'Staff & Anak - Graphe Ministry']);
    // }

    public function staffPanti(): string
    {
        $childModel = new FosterChildModel();
        $staffModel = new PantiStaffModel();

        $children = $childModel->orderBy('age', 'DESC')->findAll();
        $staffs   = $staffModel->orderBy('id', 'ASC')->findAll();

        $lastUpdatedChild = $childModel->select('updated_at')->orderBy('updated_at', 'DESC')->first();
        $lastUpdatedFormatted = 'Belum ada data';

        if ($lastUpdatedChild && !empty($lastUpdatedChild['updated_at'])) {
            $timestamp = strtotime($lastUpdatedChild['updated_at']);
            $bulanIndo = [
                1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
            ];
            $lastUpdatedFormatted = $bulanIndo[(int)date('n', $timestamp)] . ' ' . date('Y', $timestamp);
        }

        $data = [
            'title'        => 'Staff & Anak - Graphe Ministry',
            'children'     => $children,
            'staffs'       => $staffs, // <-- Kirim data staf ke view
            'total'        => count($children),
            'totalFemale'  => count(array_filter($children, fn($c) => $c['gender'] === 'Perempuan')),
            'totalMale'    => count(array_filter($children, fn($c) => $c['gender'] === 'Laki-laki')),
            'last_updated' => $lastUpdatedFormatted
        ];

        return view('panti-asuhan/staff_panti', $data);
    }

    public function kebijakanPanti(): string
    {
        return view('panti-asuhan/kebijakan', ['title' => 'Kebijakan - Graphe Ministry']);
    }

    public function donasiPanti(): string
    {
        return view('panti-asuhan/donasi', ['title' => 'Sumbangan - Graphe Ministry']);
    }

    public function murahhatiPanti(): string
    {
        return view('panti-asuhan/murah_hati', ['title' => 'Murah Hati - Graphe Ministry']);
    }

    public function penerbitMedia(): string
    {
        return view('multimedia/penerbit_graphe', ['title' => 'Penerbit - Graphe Ministry']);
    }

    public function radioMedia(): string
    {
        return view('multimedia/radio', ['title' => 'Radio - Graphe Ministry']);
    }

    public function programRadioMedia(): string
    {
        return view('multimedia/program_rbk', ['title' => 'Program RBK - Graphe Ministry']);
    }

    //  FUNGSI MEDIA TIDAK DINAMIS ATAU STATIS  //
    // public function kebenaranMedia(): string
    // {
    //     return view('multimedia/kebenaran_memerdekakan', ['title' => 'Kebenaran Memerdekakan - Graphe Ministry']);
    // }

    public function kebenaranMedia(): string
    {
        $audioModel = new AudioModel();
        $audios     = $audioModel->where('category', 'Kebenaran Memerdekakan')->orderBy('id', 'ASC')->findAll();

        $data = [
            'title'  => 'Kebenaran Memerdekakan - Graphe Ministry',
            'audios' => $audios
        ];

        return view('multimedia/kebenaran_memerdekakan', $data);
    }

    public function throughMedia(): string
    {
        return view('multimedia/through_the_bible', ['title' => 'Through The Bible - Graphe Ministry']);
    }

    public function mutiaraMedia(): string
    {
        return view('multimedia/mutiara_kebenaran', ['title' => 'Mutiara Kebenaran - Graphe Ministry']);
    }

    //  FUNGSI Galeri TIDAK DINAMIS ATAU STATIS  //
    // public function galeriMedia(): string
    // {
    //     return view('multimedia/galeri', ['title' => 'Galeri - Graphe Ministry']);
    // }


    public function galeriMedia(): string
    {
        $galleryModel = new GalleryModel();
        $galleries    = $galleryModel->orderBy('event_date', 'DESC')->findAll();

        $data = [
            'title'     => 'Galeri - Graphe Ministry',
            'galleries' => $galleries // <-- Mengirimkan data galeri ke view
        ];

        return view('multimedia/galeri', $data);
    }

    //  FUNGSI VIDEO TIDAK DINAMIS ATAU STATIS  //
    // public function videoMedia(): string
    // {
    //     return view('multimedia/video', ['title' => 'Video - Graphe Ministry']);
    // }

   public function videoMedia() // atau index() jika di Multimedia.php
    {
        $videoModel = new VideoModel();

        // 1. Ambil video yang KHUSUS diset 'is_featured = 1' saja untuk banner atas
        // (Gunakan first(), tapi JANGAN fallback ambil video biasa jika is_featured = 0)
        $featuredVideo = $videoModel->where('is_featured', 1)
                                    ->orderBy('id', 'DESC')
                                    ->first();

        // 2. Ambil SELURUH video tanpa terkecuali untuk Grid Bawah
        $videos = $videoModel->orderBy('published_at', 'DESC')
                            ->orderBy('id', 'DESC')
                            ->findAll();

        $data = [
            'title'          => 'Galeri Video & Live Streaming',
            'featured_video' => $featuredVideo,
            'videos'         => $videos
        ];

        return view('multimedia/video', $data);
    }


    //  FUNGSI P.ROH TIDAK DINAMIS ATAU STATIS  //
    // public function pedangrohDownload(): string
    // {
    //     return view('downloads/pedang_roh', ['title' => 'Pedang Roh - Graphe Ministry']);
    // }

    public function pedangrohDownload(): string
    {
        $model = new PeriodicalModel();

        $data = [
            'bulletins' => $model->orderBy('edition_number', 'DESC')->paginate(20, 'pedang_roh'),
            'pager'     => $model->pager,
        ];

        return view('downloads/pedang_roh', $data);
    }

    public function artikelDownload(): string
    {
        return view('downloads/artikel', ['title' => 'Artikel - Graphe Ministry']);
    }

    public function khotbahDownload(): string
    {
        return view('downloads/khotbah', ['title' => 'Khotbah - Graphe Ministry']);
    }

    // Method Memproses Form Contact Us
    public function sendContact()
    {
        $rules = [
            'name'    => 'required|min_length[3]',
            'email'   => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required|min_length[10]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $contactModel = new ContactModel();
        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        $contactModel->insert($data);

        return redirect()->to(base_url('contact'))->with('message', 'Pesan Anda telah berhasil terkirim. Terima kasih!');
    }
}