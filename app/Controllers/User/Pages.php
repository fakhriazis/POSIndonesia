<?php

use App\Controllers\BaseController;

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Helpdesk POS Indonesia'
        ];

        return view('adminPage');
        echo view('layout/home');
        echo view('layout/footer');
    }
}
