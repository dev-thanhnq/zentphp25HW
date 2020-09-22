<?php 
/**
 * 
 */
require_once 'AdminController.php';
require_once 'model/User.php';

class AuthAdminController extends AdminController
{
	public function login($value='')
	{
		$this->view('admin/auth/login.php');
	}

	public function checkLogin() 
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$userModel = new User();
		$user = $userModel->getUserByEmail($email);
		if ($user) {
			if ($user['password'] == $password) {
				$_SESSION['login'] = [
					'check' => true,
					'email' => $_POST['email'],
					'name' => $user['name'],
					'avatar' => $user['avatar']
				];
				$this->redirect('index.php?mod=admin&c=post&act=index');			
			} else {
				$_SESSION['login'] = false;
				echo "Mật khẩu không chính xác!";
			}
		} else {
			$_SESSION['login'] = false;
			echo "Đăng nhập thất bại!";
		}
	}

	public function logout() 
	{
		unset($_SESSION['login']);
		$this->redirect('?mod=admin&c=auth&act=login');
	}
}
 ?>