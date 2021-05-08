<?php

namespace App\Models;

use CodeIgniter\Model;

class MoviesModel extends Model
{
    protected $table = 'movies';
    protected $useTimestamps = true;

    public function getMovies($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}