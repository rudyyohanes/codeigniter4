<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Home | Test CI 4',
            'tes' => ['one', 'two', 'three']
        ];
		echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }
    
    public function about()
	{
        $data = [
            'title' => 'About Me | Test CI 4'
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }


}
