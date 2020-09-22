<?php 
require_once 'model/Category.php';
/**
 * 
 */
class ClientController
{

	public function view($path, $data = [])
    {
		$categoriesMenu = $this->selectCategoriesName();
        extract($data);
        require_once 'view/' . $path;
    }

    public function redirect($path)
    {
        header('Location:' . $path);
    }

    public function selectCategoriesName(){
    	$model = new Category();

    	return $model->selectAll();

    }

}
 ?>