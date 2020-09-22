<?php 
require_once 'controllers/admin/AdminController.php';
require_once 'model/Category.php';
/**
 * 
 */
class CategoryAdminController extends AdminController
{
	protected $model;
	protected $table = 'categories';
    function __construct()
    {
        if ($_SESSION['login']['check'] != true) {
            header('location: index.php?mod=admin&c=auth&act=login');
        }
        $this->model = new Category();
    }

	public function index()
    {
        $this->table;
		$categories = $this->model->selectAll();
        $this->view('admin/category/index.php', [
            'categories' => $categories
        ]);
	}

    public function create()
    {
        $categoriesName = $this->model->selectCategoriesName();
        $this->table;
        $this->view('admin/category/create.php', [
            'categoriesName' => $categoriesName
        ]);
    }

    public function store($data)
    {
        $data['slug'] = $this->to_slug($data['name']);
        $categories = $this->model->add($data);
        $this->redirect('?mod=admin&c=category&act=index');
    }

    public function delete($id) {
        $this->model->deleteCategory($id);
        $this->redirect('?mod=admin&c=category&act=index');
    }

    public function getFormEdit($id)
    {
        $categories = $this->model->selectEditCategory($id);
        $this->view('admin/category/edit.php', [
            'categories' => $categories
        ]);
    }

    public function edit($id, $data) 
    {
        $data['slug'] = $this->to_slug($data['name']);
        $this->model->update($id, $data);
        $this->redirect('?mod=admin&c=category&act=index');
    }
}
 ?>