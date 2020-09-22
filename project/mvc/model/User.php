<?php
require_once 'model/Model.php';

class User extends Model
{
    private $table = 'users';

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

    public function selectEditUser($id)
    {
        return $this->selectEdit($this->table, $id);
    }

    public function update($id, $data)
    {
        return $this->edit($this->table, $id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($this->table, $id);
    }

    public function getUserByEmail($email)
    {
        return $this->getByEmail($this->table, $email);
    }
}