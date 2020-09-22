<?php
require_once 'model/Model.php';

class Post extends Model
{
    private $table = 'posts';

    public function selectAll()
    {
        return $this->select($this->table);
    }

    public function add($data)
    {
        // var_dump($data);
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

    public function selectPostSameCategory($category_id)
    {
        return $this->selectPost($category_id);
    }

    public function selectDESC($col)
    {
        return $this->selectPostDESC($col);
    }

    public function updateViewCount($id)
    {
        return $this->updateView($id);
    }

    public function indexLimit($current_page, $limit)
    {
        return $this->selectPostsLimit($current_page, $limit);
    }

    // public function selectTrending()
    // {
    //     return $this->selectPostViewDESC();
    // }
}