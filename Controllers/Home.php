<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('User/userPage');
	}

	public function form()
	{
		return view('User/form');
	}

	public function data()
	{
		return view('User/DataTable');
	}

	//--------------------------------------------------------------------

}
