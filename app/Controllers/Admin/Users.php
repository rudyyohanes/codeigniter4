<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
	public function index()
	{
		echo 'Ini controller Users method index yang ada di dalam folder Admin.';
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
