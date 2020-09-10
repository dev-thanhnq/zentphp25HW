<?php
require_once 'model/Post.php';

class PostController
{
    public function list()
    {
        $model = new Post();
        $posts = $model->getAll();
        require_once 'view/post/list.php';
    }
}