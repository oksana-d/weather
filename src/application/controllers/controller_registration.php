<?php

namespace src\application\controllers;
use src\application\models\Model_Registration;
use src\application\core\Controller;

class Controller_registration extends Controller
{
	function action_index()
	{	
		session_start();
		$this->view->generate('registration_view.php', 'template_view.php');
	}
	
	public function action_signup()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$model_registration = new Model_Registration();
			$send = $model_registration->sign_up($_POST);
			
			if($send == true)
			{
				$this->view->generate('main_view.php', 'template_view.php');
			} else echo "Пользователь с таким электорнным адресом уже зарегистирован";
		} 
	}
}