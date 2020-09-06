<?php
include_once '../helpers/Model.php';

class Category extends Model
{
    public $table = 'categories';

    function getAll() {
        return $this->select($this->table);
    }

    function  getDetail() {

    }
}