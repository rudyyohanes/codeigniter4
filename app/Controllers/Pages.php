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
        return view('pages/home', $data);
    }
    
    public function about()
	{
        $data = [
            'title' => 'About Me | Test CI 4'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                'tipe' => 'Rumah',
                'alamat' => 'Jl. Flamboyan No. 2',
                'kota' => 'Bekasi'
                ], 
                [
                'tipe' => 'Kantor',
                'alamat' => 'Jl. Harapan Indah Raya No. 21',
                'kota' => 'Bekasi'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
