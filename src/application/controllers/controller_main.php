<?php

namespace src\application\controllers;
use src\application\models\Model_Main;
use src\application\core\Controller;

class Controller_Main extends Controller
{
	function action_index()
	{	
		session_start();
		$this->view->generate('main_view.php', 'template_view.php');
	}
	
	public function action_signin()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$login = $_POST['Email'];
			$password = $_POST['Password'];
			$model_main = new Model_Main();
			$auth = $model_main->sign_in($login,$password);
			
			if($auth == true)
			{
				session_start();
				$_SESSION["is_auth"] = true;
				$_SESSION["login"] = $login;
                header("Location: http://weather/weather");
			}
			else{
				session_start();
				$_SESSION["is_auth"] = false;
				$this->view->generate('main_view.php', 'template_view.php');
			}
		} 
	}

    public function action_signout()
    {
        session_start();
        $_SESSION =  array();
        session_destroy();
        $this->view->generate('main_view.php', 'template_view.php');
    }

}