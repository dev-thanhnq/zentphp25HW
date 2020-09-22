<?php
require_once 'controllers/client/ClientController.php';
require_once 'model/Post.php';
require_once 'model/Category.php';
/**
 * 
 */
class HomeClientController extends ClientController
{
	protected $model;
	protected $categoryModel;

	function __construct() 
    {
        $this->model = new Post();
        $this->categoryModel = new Category();
    }

	public function index($page)
	{
		$posts = $this->model->indexLimit($page, '4');
		$categories = $this->categoryModel->selectAll();
		$this->view('client/main.php', [
			'posts' => $posts, 
			'categories' => $categories
		]);
	}

	public function trending()
	{
		$posts = $this->model->selectDESC('view_count');
		$this->view('client/posts.php', [
			'posts' => $posts
		]);
	}

	public function show($id)
	{
		$post = $this->model->getDetail($id);
		$this->model->updateViewCount($id);
		$user = $this->model->selectUser($post['user_id']);
		$posts = $this->model->selectPostSameCategory($post['category_id']); 
		$categories = $this->categoryModel->selectAll();
		$this->view('client/detail.php', [
			'post' => $post, 
			'user' => $user,
			'posts' => $posts,
			'categories' => $categories
		]);
	}

	public function showPostsCategory($id)
	{
		$posts = $this->model->selectPostSameCategory($id);
		$this->view('client/postscategory.php', [
			'posts' => $posts
		]);
	}

}