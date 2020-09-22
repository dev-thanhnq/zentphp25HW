<?php 
/**
 * 
 */
class BaseController
{
	public function view($path, $data = [])
    {
        extract($data);
        require_once 'view/' . $path;
    }

    public function redirect($path)
    {
        header('Location:' . $path);
    }
}
 ?>