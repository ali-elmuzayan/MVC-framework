<?php


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


spl_autoload_register(function (string $class) {
    $class = str_replace('\\', '/', $class);
    require "src/$class.php";
});

use Framework\Dispatcher;
use Framework\Router;

$router = new Router();
$router->add("/pages/{slug:[\w-]+}", ['controller' => "PageController", 'action' => "show"]);
$router->add('/{controller}/{id:\d+}/{action}');
$router->add('/', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('/pages', ['controller' => 'PageController', 'action' => 'index']);
$router->add('/{controller}/{action}');



$dispatcher = new Dispatcher($router);
$dispatcher->handle($path);

