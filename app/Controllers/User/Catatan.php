<?php

namespace App\Controllers;

use App\Models\CatatanModel;

class Catatan extends BaseController
{
    public function index()
    {
        return view('catatanPage');
    }

    public function catatanAdmin()
    {
        $catatanModel = new CatatanModel();
        $catatan = $catatanModel->findAll();
        //dd($catatan);

        $data = [
            'produk' => 'Samsung Galaxy A51',
            'catatan' => $catatan
        ];

        return view('catatanPage', $data);
    }
    //--------------------------------------------------------------------

}
