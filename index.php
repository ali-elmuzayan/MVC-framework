<?php


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


spl_autoload_register(function (string $class) {
    $class = str_replace('\\', '/', $class);
    require "src/$class.php";
});

use Framework\Router;

$router = new Router();
$router->add('/', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('/pages', ['controller' => 'PageController', 'action' => 'index']);

$params = $router->match($path);

if ($params === false) {
    exit('No route match');
}

$action = $params['action'];
$controller = 'App\Controller\\' . ucwords($params['controller']) . 'Controller';



$controller_object = new $controller;
$controller_object->$action();