<?php

namespace App\Models;

use CodeIgniter\Model;

class MoviesModel extends Model
{
    protected $table = 'movies';
    protected $useTimestamps = true;
}