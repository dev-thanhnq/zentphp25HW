<?php
include_once '../helpers/Model.php';

class User extends Model
{
    public $table = 'users';

    function getAll() {
        return $this->select($this->table);
    }

    function  getDetail() {

    }
}