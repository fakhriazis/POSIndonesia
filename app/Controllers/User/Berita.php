<?php

namespace App\Controllers;

use App\Models\Help_BeritaModel;

class Berita extends BaseController
{
    public function index()
    {
        return view('beritaPage');
    }

    public function beritaAdmin()
    {
        $help_BeritaModel = new Help_BeritaModel();
        $berita = $help_BeritaModel->findAll();
        //dd($berita);

        $data = [
            'produk' => 'Samsung Galaxy A51',
            'berita' => $berita
        ];

        return view('beritaPage', $data);
    }

    //--------------------------------------------------------------------

}
