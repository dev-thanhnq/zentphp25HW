<?php
require_once 'model/Model.php';

class Post extends Model
{
    private $table = 'posts';

    public function getAll() {
        return $this->select($this->table);
    }

//    public function __construct()
//    {
//        $this->table='posts';
//    }
}