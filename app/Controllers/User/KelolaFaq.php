<?php

namespace App\Controllers;

use App\Models\KelolaFaqModel;

class KelolaFaq extends BaseController
{
    public function index()
    {
        return view('kelolaFaqPage');
    }

    //--------------------------------------------------------------------

    public function kelolaFaqAdmin()
    {
        $kelolaFaqModel = new KelolaFaqModel();
        $faq = $kelolaFaqModel->findAll();
        //dd($faq);

        $data = [
            'produk' => 'Samsung Galaxy A51',
            'faq' => $faq
        ];

        return view('kelolaFaqPage', $data);
    }
}
