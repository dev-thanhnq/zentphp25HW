<?php
require_once 'model/Model.php';

class Post extends Model
{
    private $table = 'posts';

    public function index()
    {
        return $this->select($this->table);
    }

    public function add($data)
    {
        return $this->insert($this->table, $data);
    }

    public function getDetail($id)
    {
        return $this->showDetail($this->table, $id);
    }

    public function selectEditPost($id)
    {
        return $this->selectEdit($this->table, $id);
    }

    public function update($id, $data)
    {
        return $this->edit($this->table, $id, $data);
    }

    public function deletePost($id)
    {
        return $this->delete($this->table, $id);
    }
}