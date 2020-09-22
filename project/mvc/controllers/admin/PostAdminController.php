<?php 
require_once 'controllers/admin/AdminController.php';
require_once 'model/Post.php';
/**
 * 
 */
class PostAdminController extends AdminController
{
	protected $model;
	protected $table = 'posts';
    function __construct() 
    {
        if ($_SESSION['login']['check'] != true) {
            header('location: index.php?mod=admin&c=auth&act=login');
        }
        $this->model = new Post();
    }

	public function index()
    {
        $this->table;
		$posts = $this->model->selectAll();
        $this->view('admin/post/index.php', [
            'posts' => $posts
        ]);
	}

    public function create()
    {
        $categoriesName = $this->model->selectCategoriesName();
        $usersName = $this->model->selectUsersName();
        $this->view('admin/post/create.php', [
            'categoriesName' => $categoriesName,
            'usersName' => $usersName
        ]);
    }

    public function store($data)
    {
        $file_name = $this->upload_file('images', 'thumbnail');
        $data['thumbnail'] = $file_name;
        $data['slug'] = $this->to_slug($data['title']);
        $this->model->add($data);
        $this->redirect('?mod=admin&c=post&act=index');
    }

    public function delete($id)
    {
        $this->model->deletePost($id);
        $this->redirect('?mod=admin&c=post&act=index');
    }

    public function getFormEdit($id)
    {
        $post = $this->model->selectEditPost($id);
        $categoriesName = $this->model->selectCategoriesName();
        $usersName = $this->model->selectUsersName();
        $this->view('admin/post/edit.php', [
            'post' => $post, 
            'categoriesName' => $categoriesName,
            'usersName' => $usersName
        ]);
    }

    public function edit($id, $data) 
    {
        $data['slug'] = $this->to_slug($data['title']);
        $this->model->update($id, $data);
        $this->redirect('?mod=admin&c=post&act=index');
    }
}