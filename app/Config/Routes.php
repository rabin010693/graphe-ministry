<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Auth;

// Import Controller Admin
use App\Controllers\Admin\Dashboard;
use App\Controllers\Admin\Posts;
use App\Controllers\Admin\Contacts;
use App\Controllers\Admin\Users;
use App\Controllers\Admin\Children;
use App\Controllers\Admin\PantiStaff;
use App\Controllers\Admin\Audios;
use App\Controllers\Admin\Galleries;
use App\Controllers\Admin\Events;
use App\Controllers\Admin\Churches;
use App\Controllers\Admin\PedangRohController; // <-- Import PedangRohController
use App\Controllers\Language;
use App\Controllers\Admin\ArticleController;

/** @var RouteCollection $routes */

// ==========================================
// 1. ROUTES FRONT-END (PENGUNJUNG)
// ==========================================

$routes->get('/', [Home::class, 'index']);

$routes->get('lang/(:segment)', [Language::class, 'switchLanguage']);

// Routes untuk Sub-menu Gereja
$routes->group('gereja', function($routes) {
    $routes->get('gembala_sidang', [Home::class, 'gembalaGereja']);
    $routes->get('pengakuan_iman', [Home::class, 'imanGereja']);
    $routes->get('jalan_keselamatan', [Home::class, 'keselamatanGereja']);
    $routes->get('sejarah_gbia', [Home::class, 'sejarahGereja']);
    $routes->get('jadwal_kebaktian', [Home::class, 'kebaktianGereja']);
    $routes->get('gereja_lainnya', [Home::class, 'gerejaGereja']);
});

// Routes untuk Sub-menu GITS
$routes->group('gits', function($routes) {
    $routes->get('visi_misi', [Home::class, 'visimisiGits']);
    $routes->get('program_studi', [Home::class, 'programGits']);
    $routes->get('dewan_dosen', [Home::class, 'dosenGits']);
    $routes->get('fasilitas', [Home::class, 'fasilitasGits']);
    $routes->get('pendaftaran', [Home::class, 'pendaftaranGits']);
    $routes->get('program_extension', [Home::class, 'extensionGits']);
    $routes->get('info_seminar', [Home::class, 'seminarGits']);
    $routes->get('syarat_kelulusan', [Home::class, 'syaratKelulusanGits']);
    $routes->get('mata_kuliah', [Home::class, 'mataKuliahGits']);
});

// Routes untuk Sub-menu Panti Asuhan
$routes->group('panti-asuhan', function($routes) {
    $routes->get('karena_kasih', [Home::class, 'tentangPanti']);
    $routes->get('staff_panti', [Home::class, 'staffPanti']);
    $routes->get('kebijakan', [Home::class, 'kebijakanPanti']);
    $routes->get('donasi', [Home::class, 'donasiPanti']);
    $routes->get('murah_hati', [Home::class, 'murahhatiPanti']);
});

// Routes untuk Sub-menu Multi Media
$routes->group('multimedia', function($routes) {
    $routes->get('penerbit_graphe', [Home::class, 'penerbitMedia']);
    $routes->get('radio', [Home::class, 'radioMedia']);
    $routes->get('kebenaran_memerdekakan', [Home::class, 'kebenaranMedia']);
    $routes->get('through_the_bible', [Home::class, 'throughMedia']);
    $routes->get('mutiara_kebenaran', [Home::class, 'mutiaraMedia']);
    $routes->get('galeri', [Home::class, 'galeriMedia']);
    $routes->get('video', [Home::class, 'videoMedia']);
    $routes->get('program_rbk', [Home::class, 'programRadioMedia']);
});

// Routes untuk Sub-menu Downloads
$routes->group('downloads', function($routes) {
    $routes->get('pedang_roh', [Home::class, 'pedangrohDownload']);
    $routes->get('artikel', [Home::class, 'artikelDownload']);
    $routes->get('khotbah', [Home::class, 'khotbahDownload']);
});

// Routes Menu Tunggal
$routes->get('events', [Home::class, 'events']);
$routes->get('blog', [Home::class, 'blog']);

$routes->get('contact', [Home::class, 'contact']);
$routes->post('contact/send', [Home::class, 'sendContact']);

// Routes Autentikasi Admin
$routes->get('login', [Auth::class, 'login']);
$routes->post('login/process', [Auth::class, 'processLogin']);
$routes->get('logout', [Auth::class, 'logout']);


// ==========================================
// 2. ROUTES BACK-END (ADMIN PANEL)
// ==========================================

$routes->group('admin', ['filter' => 'adminAuth'], function ($routes) {
    $routes->get('', [Dashboard::class, 'index']);
    $routes->get('dashboard', [Dashboard::class, 'index']);
    
    // CRUD Postingan
    $routes->get('posts', [Posts::class, 'index']);
    $routes->post('posts/save', [Posts::class, 'save']);
    $routes->get('posts/delete/(:num)', [Posts::class, 'delete']);
    
    // Approval Postingan (Khusus Admin Utama)
    $routes->get('posts/approve/(:num)/(:segment)', [Posts::class, 'approve']);
    
    // Management Contact Us
    $routes->get('contacts', [Contacts::class, 'index']);
    $routes->get('contacts/read/(:num)', [Contacts::class, 'read']);
    $routes->get('contacts/delete/(:num)', [Contacts::class, 'delete']);
    $routes->post('contacts/reply', [Contacts::class, 'reply']);

    // CRUD Staf Pengurus Panti
    $routes->get('panti-staff', [PantiStaff::class, 'index']);
    $routes->post('panti-staff/save', [PantiStaff::class, 'save']);
    $routes->get('panti-staff/delete/(:num)', [PantiStaff::class, 'delete']);

    // CRUD Anak Asuh Panti
    $routes->get('children', [Children::class, 'index']);
    $routes->post('children/save', [Children::class, 'save']);
    $routes->get('children/delete/(:num)', [Children::class, 'delete']);

    // CRUD Audio Khotbah MP3 Kebenaran yang Memerdekakan  
    $routes->get('audios', [Audios::class, 'index']);
    $routes->post('audios/save', [Audios::class, 'save']);
    $routes->get('audios/delete/(:num)', [Audios::class, 'delete']);

    // CRUD Gallery
    $routes->get('galleries', [Galleries::class, 'index']);
    $routes->post('galleries/save', [Galleries::class, 'save']);
    $routes->get('galleries/delete/(:num)', [Galleries::class, 'delete']);

    // CRUD Events
    $routes->get('events', [Events::class, 'index']);
    $routes->post('events/save', [Events::class, 'save']);
    $routes->get('events/delete/(:num)', [Events::class, 'delete']);

    // CRUD Gereja-gereja
    $routes->get('churches', [Churches::class, 'index']);
    $routes->post('churches/save', [Churches::class, 'save']);
    $routes->get('churches/delete/(:num)', [Churches::class, 'delete']);

    // CRUD Pedang Roh (Modal Popup + AJAX)
    $routes->get('pedang-roh', [PedangRohController::class, 'index']);
    $routes->post('pedang-roh/save', [PedangRohController::class, 'save']);
    $routes->get('pedang-roh/delete/(:num)', [PedangRohController::class, 'delete']);

    // CRUD Artikel & Literatur (Buku, Traktat, Artikel)
    $routes->get('articles', [ArticleController::class, 'index']);
    $routes->post('articles/save', [ArticleController::class, 'save']);
    $routes->get('articles/delete/(:num)', [ArticleController::class, 'delete']);

    // Khusus Admin Utama (Dilindungi Filter adminOnly)
    $routes->group('', ['filter' => 'adminOnly'], function ($routes) {
        $routes->get('users', [Users::class, 'index']);
        $routes->post('users/save', [Users::class, 'save']);
        $routes->get('users/delete/(:num)', [Users::class, 'delete']);
    });
});