<?php


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


spl_autoload_register(function (string $class) {
    $class = str_replace('\\', '/', $class);
    require "src/$class.php";
});

use Framework\Router;

$router = new Router();
$router->add("/pages/{slug:[\w-]+}", ['controller' => "PageController", 'action' => "show"]);
$router->add('/{controller}/{id:\d+}/{action}');
$router->add('/', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('/pages', ['controller' => 'PageController', 'action' => 'index']);
$router->add('/{controller}/{action}');

$params = $router->match($path);

var_dump($params);

if ($params === false) {
    exit('No route match');
}

// temporarily check if the controller Name come from the match pattern
// add controller to it
if(!str_contains('Controller', $params['controller'])) {

    $params['controller'] .= 'Controller';
}


$action = $params['action'];
$controller = 'App\Controller\\' . ucwords($params['controller']) ;



$controller_object = new $controller;
$controller_object->$action();