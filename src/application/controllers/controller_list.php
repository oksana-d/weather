<?php

namespace src\application\controllers;
use src\application\models\Model_list;
use src\application\core\Controller;

class Controller_list extends Controller
{
public function action_index()
    {
		session_start();
		if($this->AuthCheck() == true)
		{
			$model_list = new Model_List();
			$this->view->generate('list_view.php', 'template_view.php', $model_list->get_feedback());
		} else $this->view->generate('main_view.php', 'template_view.php');
	}
}