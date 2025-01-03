<?php
session_start(); // Ensure sessions are started

include 'bash.php';
$server = $_SERVER['REQUEST_URI'];
$url = strtok($server, '?');

if($url === '/dashboard'){
    if(!$_SESSION['user_id']){
        $username  = $_POST['username'];
        $password  = $_POST['password'];
        $user = new auth();
        $usr_data = $user->login($username, $password);
        
        if($usr_data){
            $_SESSION['user_id'] = $usr_data['Email'];
            $data = new course();
            $couseData = $data->getProgress($_SESSION['user_id']);
            include_once __DIR__.'/../view/templates/Authenticated/dashboard.blade.php';
        }else{
            header("Location: /");
        }
    }else{
        $data = new users();
        $usr_data = $data->getUserData($_SESSION['user_id']);
        
        if($usr_data){
            $data = new course();
            $couseData = $data->getProgress($_SESSION['user_id']);
            include_once __DIR__.'/../view/templates/Authenticated/dashboard.blade.php';
        }else{
            header("Location: /");
        }
    }

}elseif($url === '/my-courses' || $url === '/progress'){
    $data = new course();
    $couseData = $data->getProgress($_SESSION['user_id']);
    
    if($url === '/my-courses'){
        include_once __DIR__.'/../view/templates/Authenticated/my-courses.blade.php';
    }else{
        include_once __DIR__.'/../view/templates/Authenticated/progress-tracking.blade.php';
    }

}elseif($url === '/logout'){
    session_write_close();
    ob_end_flush();
    session_abort();
    header("Location: /");
}else{
    echo "error";
}
