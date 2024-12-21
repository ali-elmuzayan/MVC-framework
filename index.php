<?php
declare(strict_types=1);

require_once 'autoload.php';
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

use App\Database;
use Framework\Container;
use Framework\Dispatcher;
use Framework\Router;

$router = new Router();
$router->add("/pages/{slug:[\w-]+}", ['controller' => "PageController", 'action' => "show"]);
$router->add('/{controller}/{id:\d+}/{action}');
$router->add('/', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('/pages', ['controller' => 'PageController', 'action' => 'index']);
$router->add('/{controller}/{action}');


$container = new Container();
$container->set(Database::class, function () {
    return new Database('localhost', 'cms', 'root', '');

});

$dispatcher = new Dispatcher($router, $container);
$dispatcher->handle($path);

