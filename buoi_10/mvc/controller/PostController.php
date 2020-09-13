<?php
require_once 'model/Post.php';
require_once 'controller/BaseController.php';

class PostController extends BaseController 
{
    protected $model;
    function __construct() 
    {
        $this->model = new Post();
    }

    public function list()
    {
        $posts = $this->model->index();
        $this->view('post/list.php', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $this->view('post/create.php');
    }

    public function store($data)
    {
        $this->model->add($data);
        $this->redirect('?mod=post&act=list');
    }

    public function show($id)
    {
        $posts = $this->model->getDetail($id);
        $this->view('post/detail.php', [
            'post' => $posts
        ]);
    }

    public function selectEdit($id)
    {
        $posts = $this->model->selectEditPost($id);
        $this->view('post/edit.php', [
            'post' => $posts
        ]);
    }

    public function edit($id, $data)
    {
        $this->model->update($id, $data);
        $this->redirect('?mod=post&act=list');
    }

    public function delete($id)
    {
        $this->model->deletePost($id);
        $this->redirect('?mod=post&act=list');
    }
}