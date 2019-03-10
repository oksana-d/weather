<?php

namespace src\application\models;
use src\application\core\Model;
use src\application\DB;

class Model_feedback extends Model
{
	 public function send_feedback($data)
	 {
		$conn = DB::connect();
        $execute_query = $conn->query("INSERT INTO feedback (name, email, message) VALUES(?,?,?)", [$data['Name'], $data['Email'],$data['Message']]);
		
		if ($execute_query) {
            return $conn->lastInsertId();
        }

        return false;
	}
}