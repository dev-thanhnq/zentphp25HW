<?php
require_once 'model/Model.php';

class Category extends Model
{
    private $table = 'categories';

    public function selectAll()
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

    public function update($id, $data)
    {
        return $this->edit($this->table, $id, $data);
    }

    public function deleteCategory($id)
    {
        return $this->delete($this->table, $id);
    }
}