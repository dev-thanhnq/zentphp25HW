<?php
require_once 'model/Category.php';
class CategoryController
{
    public function list()
    {
        $model = new Category();
        $categories = $model->index();
        require_once 'view/category/list.php';
    }

    public function create()
    {
        require_once 'view/category/create.php';
    }

    public function store($data)
    {
        $model = new Category();
        $model->add($data);
        header('Location:?mod=category&act=list');
    }

    public  function detail($id)
    {
        $model = new Category();
        $categories = $model->getDetail($id);
        require_once 'view/category/detail.php';
    }

    public function selectEdit($id)
    {
        $model = new Category();
        $categories = $model->selectEditCategory($id);
        require_once 'view/category/edit.php';
    }

    public function edit($id, $data) {
        $model = new Category();
        $model->update($data,$id);
        header('Location:?mod=category&act=list');
    }

    public function delete($id)
    {
        $model = new  Category();
        $model->deleteCategory($id);
        header('Location:?mod=category&act=list');
    }

}