<?php

namespace src\application\models;
use src\application\core\Model;
use src\application\DB;

class Model_Registration extends Model
{
	
	public function sign_up($data)
	{
		
		$data['FirstName'] = $this->clean($data['FirstName']);
		$data['LastName']  = $this->clean($data['LastName']);
		$data['email']  = $this->clean($data['email']);
		$data['password'] = $this->clean($data['password']);
		$data['gender'] = $this->clean($data['gender']);
		$data['BirthDate'] = $this->clean($data['BirthDate']);

		if($this->validate($data['email'])==true) {
            if ($data['gender'] == 'не выбран') {
                $data['gender'] = null;
            }

            if (empty($data['BirthDate'])) {
                $data['BirthDate'] = null;
            }

            $conn = DB::connect();
            $execute_query = $conn->query("INSERT INTO user (firstname, surname, email, password, gender, birthday) VALUES(?,?,?,?,?,?)",
                [
                    $data['FirstName'],
                    $data['LastName'],
                    $data['email'],
                    $data['password'],
                    $data['gender'],
                    $data['BirthDate']
                ]);

            if ($execute_query) {
                return $conn->lastInsertId();
            }
        } else return false;
	}

	private function validate($email){
        $conn = DB::connect();
        $auth = $conn->query("SELECT * FROM user WHERE email=?", [$email]);
        if($auth==false){
            return true;
        } else return false;
    }
	
	private function clean($data){
		$value = "";
	    $value = trim($data);
	    $value = stripslashes($value);
	    $value = strip_tags($value);
	    $value = htmlspecialchars($value);
	    
	    return $value;
	}
}