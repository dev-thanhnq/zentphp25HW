<?php 
require_once 'controllers/admin/AdminController.php';
require_once 'model/User.php';
/**
 * 
 */
class UserAdminController extends AdminController
{
	protected $model;
	protected $table = 'users';
    function __construct() 
    {
        if ($_SESSION['login']['check'] != true) {
            header('location: index.php?mod=admin&c=auth&act=login');
        }
        $this->model = new User();
    }

	public function index()
    {
        $this->table;
		$users = $this->model->selectAll();
        $this->view('admin/user/index.php', [
            'users' => $users
        ]);
	}

    public function create()
    {
        $this->table;
        $this->view('admin/user/create.php');
    }

    public function store($data)
    {
        $file_name = $this->upload_file('images', 'avatar');
        $data['avatar'] = $file_name;
        $this->model->add($data);
        $this->redirect('?mod=admin&c=user&act=index');
    }

    public function delete($id)
    {
        $this->model->deleteUser($id);
        $this->redirect('?mod=admin&c=user&act=index');
    }

    public function getFormEdit($id)
    {
        $user = $this->model->selectEditUser($id);
        $this->view('admin/user/edit.php', [
            'user' => $user
        ]);
    }

    public function edit($id, $data)
    {
        $this->model->update($id, $data);
        // var_dump($data);
        $this->redirect('?mod=admin&c=user&act=index');
    }
}
 ?>