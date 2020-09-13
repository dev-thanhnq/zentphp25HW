<?php
require_once 'model/user.php';
require_once 'controller/BaseController.php';

class UserController extends BaseController 
{
    protected $model;
    function __construct() 
    {
        $this->model = new User();
    }

    public function list()
    {
        $users = $this->model->index();
        $this->view('user/list.php', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $this->view('user/create.php');
    }

    public function store($data)
    {
        $this->model->add($data);
        $this->redirect('?mod=user&act=list');
    }

    public function show($id)
    {
        $users = $this->model->getDetail($id);
        $this->view('user/detail.php', [
            'users' => $users
        ]);
    }

    public function selectEdit($id)
    {
        $users = $this->model->selectEdituser($id);
        $this->view('user/edit.php', [
            'users' => $users
        ]);
    }

    public function edit($id, $data)
    {
        $this->model->update($id, $data);
        $this->redirect('?mod=user&act=list');
    }

    public function delete($id)
    {
        $this->model->deleteuser($id);
        $this->redirect('?mod=user&act=list');
    }
}