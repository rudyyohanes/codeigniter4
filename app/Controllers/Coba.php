<?php

namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function coba()
	{
		echo 'hello world';
	}

	public function about($nama = '', $umur = '')
	{
		echo "Halo, nama saya $nama. Saya berumur $umur tahun.";
	}
}
