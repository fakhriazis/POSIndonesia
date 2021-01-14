<?php

namespace App\Controllers\User;

use App\Models\Help_BeritaModel;
use App\Controllers\BaseController;
use App\Models\User\UserModel;
use App\Models\Admin\AdminModel;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

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

    //========== REFERENSI MITRA & MITRA ====================
    public function referensi()
    {
        return view('user/referensiPage');
    }

    public function referensiResponCode()
    {
        $referensiCodeModel = new UserModel();
        $rcModel = $referensiCodeModel->readAll('help_responcode')->getResult();

        $data = [
            'responCode' => $rcModel
        ];

        return view('user/referensi/referensiResponCode', $data);
    }

    public function referensiDataMitraProduk()
    {
        $referensiMitraModel = new UserModel();
        $rmModel = $referensiMitraModel->readAll('help_mitra')->getResult();

        $data = [
            'mitra' => $rmModel
        ];
        return view('/user/referensi/referensiDataMitraProduk', $data);
    }

    public function tambahResponCode()
    {
        return view('/user/referensi/viewTambahResponCode');
    }

    public function tambahMitra()
    {
        return view('/user/referensi/viewTambahMitra');
    }
    //==========================================================
    public function viewTroubleshooting()
    {
        $troubleshootingModel = new UserModel();
        $tsModel = $troubleshootingModel->join()->getResult();

        $data = [
            'tsModel' => $tsModel
        ];
        return view('user/troubleshooting/viewTroubleshooting', $data);
    }

    public function troubleshooting()
    {

        return view('user/troubleshooting/troubleshootingPage');
    }

    public function report()
    {
        return view('user/report/reportPage');
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

        return view('user/kelolaFaq/kelolaFaqPage', $data);
    }

    public function catatan()
    {

        $catatanModel = new UserModel();
        $catatan = $catatanModel->readAll('help_catatan')->getResult();


        $data = [
            'catatan' => $catatan
        ];

        return view('user/catatan/catatanPage', $data);
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
        return view('user/catatan/tambahCatatanPage');
    }

    public function berita()
    {
        $beritaModel = new UserModel();
        $berita = $beritaModel->readAll('help_berita')->getResult();

        $data = [
            'berita' => $berita
        ];

        return view('user/berita/beritaPage', $data);
    }

    public function tambahBerita()
    {
        return view('/user/berita/viewTambahBerita');
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
        return view('user/kelolaFaq/tambahfaq');
    }
    public function TambahFAQ()
    {
        $model = new UserModel();
        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'jawaban' => $this->request->getPost('jawaban')
        ];
        $model->tambah('help_faq', $data);
        return redirect()->to(base_url('/user/kelolaFaq'));
    }

    public function gangguanSementara()
    {
        $gangguanSementaraModel = new UserModel();
        $gsModel = $gangguanSementaraModel->readAll('help_infosementara')->getResult();

        $data = [
            'gsModel' => $gsModel
        ];

        return view('user/gangguan/gangguanSementara', $data);
    }

    public function infoGangguan()
    {
        $infoGangguan = new UserModel();
        $gangguanModel = $infoGangguan->readAll('help_info')->getResult();

        $data = [
            'gangguan' => $gangguanModel
        ];

        return view('/user/gangguan/infoGangguan', $data);
    }

    public function tambahInfoGangguan()
    {
        return view('/user/gangguan/viewTambahInfo');
    }

    public function documentControl()
    {
        return view('/user/document/documentControl');
    }

    public function viewDocumentDetail()
    {
        $model = new AdminModel();
        $data['title'] = 'Document Control';
        $data['aplikasi'] = 'aplikasi';
        $data['listDocument	'] = $model->readAll('help_document')->getResult();
        //return view('Document\viewDetailDocument', $data);
        return view('/user/document/viewDocumentDetail', $data);
    }
    //--------------------------------------------------------------------

}
