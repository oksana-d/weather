<?php

namespace src\application\controllers;
use src\application\core\Controller;
use src\application\models\Model_feedback;

class Controller_Feedback extends Controller
{
	public function action_index()
	{
        session_start();
		$this->view->generate('feedback_view.php', 'template_view.php');
	}
	
	public function action_send()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(!$_POST["g-recaptcha-response"]) {
                exit('Заполните капчу');
            }

            $secretKey   = "6LfieYsUAAAAALhNYbhS9AcRCOSt-5ysYf1EtvQ-";
            $responseKey = $_POST["g-recaptcha-response"];
            $userIP      = $_SERVER['REMOTE_ADDR'];

            $url      = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
            $response = file_get_contents($url);

            $model_feedback = new Model_feedback();
            $send           = $model_feedback->send_feedback($_POST);

            if ($send == true) {
                $this->view->generate('feedback_view.php', 'template_view.php', $response);
            }
        }
    }
}