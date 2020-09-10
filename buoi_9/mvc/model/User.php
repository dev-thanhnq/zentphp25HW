<?php
require_once 'model/Model.php';

class User extends Model
{
    private $table = 'users';

    public function getAll() {
        return $this->select($this->table);
    }
}