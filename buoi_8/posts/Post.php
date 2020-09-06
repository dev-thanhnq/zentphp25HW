<?php
include_once '../helpers/Model.php';

class Post extends Model
{
    public $table = 'posts';
    public $title;
    public $slug;
    public $description;
    public $content;


    function getAll() {
        return $this->select($this->table);
    }

    function  getDetail() {

    }
}