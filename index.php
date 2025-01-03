<?php
    //Routing
    $server = $_SERVER['REQUEST_URI'];
    $url = strtok($server, '?');

    $routes = [
        '/' => '/app/view/templates/public/index.blade.php',
        '/course-catalog' => '/app/view/templates/public/course-catalog.blade.php',
        '/dashboard' => '/app/controler/main.php',
        '/login' => '/app/view/templates/public/login.blade.php',
        '/register' => '/app/view/templates/public/signup.blade.php',
        '/logout' => '/app/view/templates/logout.blade.php',
        '/progress' => '/app/controler/main.php',
        '/my-courses' => '/app/controler/main.php',
        '/WebDevelopment' => '/app/view/templates/public/course_details/web-development.blade.php',
        '/DataScience' => '/app/view/templates/public/course_details/data-science.blade.php',
        '/MachineLearning' => '/app/view/templates/public/course_details/machine-learning.blade.php',
        '/MobileAppDevelopment' => '/app/view/templates/public/course_details/mobile-app-development.blade.php',
        '/logout' => '/app/controler/main.php',
    ];
    if(array_key_exists($url, $routes)){
        include __DIR__ .$routes[$url];
    }else{
        echo "error";
    }
?>