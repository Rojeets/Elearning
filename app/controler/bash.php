<?php
include_once __DIR__.'/../model/data.php';
class auth{
    function login($username, $password){
        if($username && $password){
            $data = new users();
            $user = $data->login($username, $password);
            if($user){
                $_SESSION['user_id'] = $user['Email'];
                $usr_data = $data->getUserData($user['Email']);
                return $usr_data;
            }
        }
    }
}

class course {
    function getProgress($user_id) {
        $data = new courses();
        $couseData = $data->getCourseData($user_id);
        return $couseData;
    }
}


