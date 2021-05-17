<?php

namespace App\Controllers;

use App\Models\PeopleModel;

class People extends BaseController
{
    protected $peopleModel;
    public function __construct()
    {
        $this->peopleModel = new PeopleModel();
    }

	public function index()
	{
        $currentPage = $this->request->getVar('page_people') ? $this->request->getVar('page_people') : 1;
        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $people = $this->peopleModel->search($keyword);
        } else {
            $people = $this->peopleModel;
        }
        
        $data = [
            'title' => 'People List | Test CI 4',
            // 'people' => $this->peopleModel->findAll()
            'people' => $this->peopleModel->paginate(10, 'people'),
            'pager' => $this->peopleModel->pager,
            'currentPage' => $currentPage
        ];

        return view('people/index', $data);
    }
}
