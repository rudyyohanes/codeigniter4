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

        // connect to database without model

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

        // if movies not in the table
        if(empty($data['movies'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Movie title ' . $slug . ' not found,');
        }

        return view('movies/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Add movie form | Test CI 4',
            'validation' => \Config\Services::validation()
        ];
        return view('movies/create', $data);
    }

    public function save()
    {
        // validate input
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[movies.title]',
                'errors' => [
                    'required' => '{field} can not empty.',
                    'is_unique' => 'movie {field} already registered.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/movies/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->movieModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'director' => $this->request->getVar('director'),
            'production' => $this->request->getVar('production'),
            'poster' => $this->request->getVar('poster'),
            'released' => $this->request->getVar('released'),
            'plot' => $this->request->getVar('plot')
        ]);

        session()->setFlashdata('message', 'Add data success.');

        return redirect()->to('/movies');
    }

    public function delete($id)
    {
        $this->movieModel->delete($id);
        session()->setFlashdata('message', 'Delete data success.');
        return redirect()->to('/movies');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit movie form | Test CI 4',
            'validation' => \Config\Services::validation(),
            'movies' => $this->movieModel->getMovies($slug)
        ];
        return view('movies/edit', $data);
    }

    public function update($id)
    {
        $oldMovie = $this->movieModel->getMovies($this->request->getVar('slug'));
        if ($oldMovie['title'] == $this->request->getVar('title')) {
            $title_rule = 'required';
        } else {
            $title_rule = 'required|is_unique[movies.title]';
        }

        // validate input
        if (!$this->validate([
            'title' => [
                'rules' => $title_rule,
                'errors' => [
                    'required' => '{field} can not empty.',
                    'is_unique' => 'movie {field} already registered.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/movies/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->movieModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'director' => $this->request->getVar('director'),
            'production' => $this->request->getVar('production'),
            'poster' => $this->request->getVar('poster'),
            'released' => $this->request->getVar('released'),
            'plot' => $this->request->getVar('plot')
        ]);

        session()->setFlashdata('message', 'Edit data success.');

        return redirect()->to('/movies');
    }
}
