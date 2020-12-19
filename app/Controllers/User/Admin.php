<?php

namespace App\Controllers\User;

use App\Models\Help_BeritaModel;
use App\Controllers\BaseController;
use App\Models\User\UserModel;

class Admin extends BaseController
{
    // protected $help_BeritaModel;
    // public function __construct()
    // {
    //     $this->help_BeritaModel = new Help_BeritaModel();
    // }

    public function index()
    {

        // $help_BeritaModel = new Help_BeritaModel();
        // $berita = $help_BeritaModel->findAll();
        // //dd($berita);

        // $data = [
        //     'produk' => 'Samsung Galaxy A51'
        // ];

        return view('user/adminPage');
    }

    public function referensi()
    {
        return view('user/referensiPage');
    }

    public function referensiResponCode()
    {
        return view('user/referensi/referensiResponCode');
    }

    public function referensiDataMitraProduk()
    {
        return view('/user/referensi/referensiDataMitraProduk');
    }

    public function troubleshooting()
    {
        return view('user/troubleshootingPage');
    }

    public function report()
    {
        return view('user/reportPage');
    }

    public function kelolaFaq()
    {
        $FaqModel = new UserModel();
        $faq = $FaqModel->readAll('help_faq')->getResult();
        //dd($faq);

        $data = [
            'produk' => 'Samsung Galaxy A51',
            'faq' => $faq
        ];

        return view('user/kelolaFaqPage', $data);
    }

    public function catatan()
    {

        $catatanModel = new UserModel();
        $catatan = $catatanModel->readAll('help_catatan')->getResult();


        $data = [
            'catatan' => $catatan
        ];

        return view('user/catatanPage', $data);
    }

    public function tambahCatatan()
    {
        $model = new UserModel();
        $data = [
            'idlayanan' => $this->request->getPost('idlayanan'),
            'permasalahan' => $this->request->getPost('permasalahan'),
            'dampak' => $this->request->getPost('dampak'),
            'idgangguan' => $this->request->getPost('idgangguan'),
            'idgangguan' => $this->request->getPost('idgangguan'),
            'tindak_lanjut' => $this->request->getPost('tindak_lanjut'),
            'tgl_selesai' => $this->request->getPost('tgl_selesai'),
            'output_hasil' => $this->request->getPost('output_hasil'),
            'iduser' => $this->request->getPost('iduser')
        ];
        $model->tambah('help_log', $data);
        return redirect()->to(base_url('user'));
    }

    public function viewTambahCatatan()
    {
        return view('user/tambahCatatanPage');
    }

    public function berita()
    {
        $beritaModel = new UserModel();
        $berita = $beritaModel->readAll('help_berita')->getResult();

        $data = [
            'berita' => $berita
        ];

        return view('user/beritaPage', $data);
    }

    public function form()
    {
        return view('user/form');
    }

    public function data()
    {
        return view('user/datatable');
    }

    public function viewTambahFAQ()
    {
        return view('user/tambahfaq');
    }
    public function TambahFAQ()
    {
        // $model = new AdminModel();
        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'jawaban' => $this->request->getPost('jawaban')
        ];
        // $model->tambah('help_layanan', $data);
        return redirect()->to(base_url('/user/kelolaFaq'));
    }

    public function gangguanSementara()
    {
        return view('user/gangguan/gangguanSementara');
    }

    public function infoGangguan()
    {
        return view('/user/gangguan/infoGangguan');
    }
    //--------------------------------------------------------------------

}
