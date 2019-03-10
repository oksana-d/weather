<?php

namespace src\application\models;

use src\application\core\model;
use src\application\DB;

class Model_Main extends Model
{
    public function sign_in($login, $password)
    {
        $conn = DB::connect();
        $auth = $conn->query("SELECT password FROM user WHERE email=?", [$login]);
        if($auth[0]['password'] == $password){
            return true;
        } else return false;
    }

    private function validate($login){

        $conn = DB::connect();
        $data = $conn->query("SELECT COUNT(id_user) FROM user WHERE email=?", [$login]);

        if($data[0]['COUNT(id)'] > 0)
        {
            return false;
        }else{
            return true;
        }
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