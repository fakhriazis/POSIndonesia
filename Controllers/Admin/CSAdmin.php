<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdminModel;

class CSAdmin extends BaseController
{
	// public function admin()
	// {
	// 	echo 'error';
	// }

	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard'
		];
		return view('Admin\dashboard', $data);
	}

	public function viewAdmin()
	{
		$model = new AdminModel();
		$data['title'] = 'Admin';
		$data['listAdmin'] = $model->readAll('help_user')->getResult();
		return view('Admin\Admin\viewAdmin', $data);
	}
	public function viewTambahAdmin()
	{
		$data['title'] = 'Tambah Admin';
		return view('Admin\Admin\viewTambahAdmin', $data);
	}

	public function TambahAdmin()
	{
		$model = new AdminModel();
		$data = [
			'nama_user' => $this->request->getPost('nama_user'),
			'email' => $this->request->getPost('email'),
			'password' => $this->request->getPost('password'),
			'idlayanan' => $this->request->getPost('idlayanan'),
			'idakses' => $this->request->getPost('idakses')
		];
		$model->tambah('help_user', $data);
		return redirect()->to(base_url('/admin'));
	}

	public function viewEditAdmin($id)
	{
		$model = new AdminModel();
		$data['title'] = 'Edit Admin';
		$data['listAdmin'] = $model->read('help_user', 'iduser' ,$id)->getResult();
		return view('Admin\Admin\viewEditAdmin', $data);
	}

	public function viewLayanan()
	{
		$model = new AdminModel();
		$data = [
			'title' => 'Layanan'
		];
		$data['listLayanan'] = $model->readAll('help_layanan')->getResult();
		return view('Admin\Layanan\viewLayanan', $data);
	}

	public function viewTambahLayanan()
	{
		$data['title'] = 'Tambah Layanan';
		// return view('Admin\Layanan\viewTambahLayanan', $data);
	}

	public function TambahLayanan()
	{
		$model = new AdminModel();
		$data = [
			'namalayanan' => $this->request->getPost('namalayanan')
		];
		$model->tambah('help_layanan', $data);
		return redirect()->to(base_url('/layanan'));
	}

	public function viewEditLayanan()
	{
		$model = new AdminModel();
		$data['title'] = 'Edit Admin';
		$data['listAdmin'] = $model->read('help_layanan', 'idlayanan' ,$id)->getResult();
		// return view('Admin\Admin\viewEditAdmin', $data);
	}

	public function editAdmin()
	{
		$model = new AdminModel();
		$data = [
			'nama_user' => $this->request->getPost('nama_user'),
			'email' => $this->request->getPost('email'),
			'password' => $this->request->getPost('password'),
			'idlayanan' => $this->request->getPost('idlayanan'),
			'idakses' => $this->request->getPost('idakses')
		];
		$model->ubah('help_user', 'iduser', $this->request->getPost('iduser'), $data);
		return redirect()->to(base_url('/admin'));
	}

	public function editLayanan($id)
	{
		$model = new AdminModel();
		$model->ubah('help_layanan', 'idlayanan', $id);
		return redirect()->to(base_url('/layanan'));
	}

	public function deleteAdmin($id)
	{
		$model = new AdminModel();
		$model->hapus('help_user', 'iduser', $id);
		return redirect()->to(base_url('/admin'));
	}

	public function deleteLayanan($id)
	{
		$model = new AdminModel();
		$model->hapus('help_layanan', 'idlayanan', $id);
		return redirect()->to(base_url('/layanan'));
	}

	//--------------------------------------------------------------------
	public function viewDocument()
	{
		$model = new AdminModel();
		$data['title'] = 'Document Control';
		$data['listDocument'] = $model->readAll('help_document')->getResult();
		return view('Admin\Document\viewDocument', $data);
	}

	public function viewDocumentDetail()
	{
		$model = new AdminModel();
		$data['title'] = 'Document Control';
		$data['listDocument	'] = $model->readAll('help_document')->getResult();
		return view('Admin\Document\viewDocumentdetail', $data);
	}
	//--------------------------------------------------------------------
	public function viewLog()
	{
		$model = new AdminModel();
		$data['title'] = 'Log';
		$data['log'] = $model->readAll('help_log')->getResult();
		return view('Admin\viewlog', $data);
	}

	public function viewTambahLog()
	{
		$model = new AdminModel();
		$data['title'] = 'Tambah Log';
		return view('Admin\viewtambahlog', $data);
	}
}
