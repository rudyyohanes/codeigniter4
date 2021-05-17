<?php

namespace App\Models;

use CodeIgniter\Model;

class PeopleModel extends Model
{
    protected $table = 'people';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'address'];

    public function search($keyword) {
        // $builder = $this->table('people');
        // $builder->like('name', $keyword);
        // return $builder;

        return $this->table('people')->like('name', $keyword)->orLike('address', $keyword);
    }
}