<?php

namespace src\application\models;
use src\application\core\Model;
use src\application\DB;

class Model_List extends Model
{
	public function get_feedback()
	{	
		$conn = DB::connect();
        return $conn->query("SELECT name, email, message FROM feedback");
	}

	
}