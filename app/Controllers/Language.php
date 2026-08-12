<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{
    public function switchLanguage($locale = null)
    {
        $session = session();

        if ($locale) {
            // Simpan bahasa yang dipilih ke dalam session
            $session->set('lang', $locale);
        }

        // Kembalikan ke halaman sebelumnya
        return redirect()->back();
    }
}