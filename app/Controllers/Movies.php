<?php

namespace App\Controllers;

use App\Models\MoviesModel;

class Movies extends BaseController
{
    protected $movieModel;

    public function __construct()
    {
        $this->movieModel = new MoviesModel();
    }

	public function index()
	{
        $movie = $this->movieModel->findAll();
        
        $data = [
            'title' => 'Movie List | Test CI 4',
            'movie' => $movie
        ];

        // cara connect db tanpa model
        // $db = \Config\Database::connect();
        // $movie = $db->query("SELECT * FROM movies");
        // foreach($movie->getResultArray() as $row){
        //     d($row);
        // }

        // $movieModel = new \App\Models\MoviesModel();
        // $movieModel = new MoviesModel();

        
        // dd($movie);

        return view('movies/index', $data);
    }
}
