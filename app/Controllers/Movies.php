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
            'movie' => $this->movieModel->getMovies()
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

    public function detail($slug)
    {
        $movie = $this->movieModel->getMovies($slug);
        $data = [
            'title' => 'Movie Detail | Test CI 4',
            'movies' => $this->movieModel->getMovies($slug)
        ];
        return view('movies/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add movie form | Test CI 4'
        ];
        return view('movies/create', $data);
    }
}
