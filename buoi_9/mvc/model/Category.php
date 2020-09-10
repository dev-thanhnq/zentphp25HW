<?php
require_once 'model/Model.php';

class Category extends Model
{
    private $table = 'categories';
    public $id;

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

    public function selectEditCategory($id)
    {
        return $this->selectEdit($this->table, $id);
    }

    public function update($data, $id)
    {
        return $this->edit($this->table, $data, $id);
    }

    public function deleteCategory($id)
    {
        return $this->delete($this->table, $id);
    }
}