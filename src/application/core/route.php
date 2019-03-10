<?php
namespace src\application\core;

class Route
{
    public static function start()
    {
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
       /// var_dump($routes);die();
        if ( !empty($routes[1]) ) {
            $controller_name = $routes[1];
        }

        if ( !empty($routes[2]) ) {
            $action_name = $routes[2];
        }

        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;
        $model_file = $model_name.'.php';
        $model_path = "src/application/models/".$model_file;

        if(file_exists($model_path)) {
            include "src/application/models/".$model_file;
        }

        $controller_file = $controller_name.'.php';
        $controller_path = "src/application/controllers/".$controller_file;

        if(file_exists($controller_path)) {
            include "src/application/controllers/".$controller_file;
        } else {
            Route::ErrorPage404();
        }

        $controller_name = "src\application\controllers\\$controller_name";
        $controller = new $controller_name;

        $action = $action_name;

        if(method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }
    }

    public static function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}