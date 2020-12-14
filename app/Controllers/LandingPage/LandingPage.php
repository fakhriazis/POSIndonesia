<?php namespace App\Controllers\LandingPage;

use App\Controllers\BaseController;
use App\Models\LandingPage\ModelHome;

class LandingPage extends BaseController
{
	//method memanggil halaman view
	public function index()
	{
		$model = new ModelHome();
        $data['help_infosementara']  = $model->TampilInfoGangguan()->getResult();
        $data['help_berita']  = $model->TampilBerita()->getResult();
        $data['help_info']  = $model->TampilGangguanLengkap()->getResult();
		echo view('LandingPage\Home', $data);
	}

	public function GangguanSementara()
	{
		echo view('LandingPage\GangguanSementara');
	}

	public function Download()
	{
		echo view('LandingPage\Download');
	}

	public function TampilBerita()
	{
		echo view('LandingPage\Berita');
	}

	public function CariNtpn()
	{
		echo view('LandingPage\HalamanNtpn');
	}

	public function HalamanLogin()
	{
		return view('LandingPage\HalamanLogin');
	}
}
