<?php
require_once 'model/Category.php';
require_once 'controller/BaseController.php';

class CategoryController extends BaseController
{
    protected $model;
    function __construct()
    {
        $this->model = new Category();
    }

    public function list()
    {
        $categories = $this->model->index();
        $this->view('category/list.php', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $this->view('category/create.php');
    }

    public function store($data)
    {
        $this->model->add($data);
        $this->redirect('?mod=category&act=list');
    }

    public  function detail($id)
    {
       $categories = $this->model->getDetail($id);
        $this->view('category/detail.php', [
            'categories' => $categories
        ]);
    }

    public function selectEdit($id)
    {
       $categories = $this->model->selectEditCategory($id);
        $this->view('category/edit.php', [
            'categories' => $categories
        ]);
    }

    public function edit($id, $data) 
    {
        $this->model->update($id, $data);
        $this->redirect('?mod=category&act=list');
    }

    public function delete($id)
    {
        $this->model->deleteCategory($id);
        $this->redirect('?mod=category&act=list');
    }

}