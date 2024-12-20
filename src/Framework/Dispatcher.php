<?php
namespace Framework;

use ReflectionMethod;
use ReflectionClass;

class Dispatcher
{
    public function __construct(private Router $router) {
    }

    public function handle(string $path):void
    {
        // get the params from the path otherwise exit from the script
        $params = $this->router->match($path);
        if ($params === false) {
            exit("No route found");
        }


        // action and controller from the params
        $action = $this->getActionName($params);
        $controller = $this->getControllerName($params); ;

        $controller_object = $this->getObject($controller);


        $args = $this->getActionArguments($controller, $action, $params);
        $controller_object->$action(...$args);

    }

    /**
     * get the arguments of the action using ReflectionMethod class
     *
     * @param string $controller controller class that contain the method
     * @param string $action the action that we want its argument
     * @param array $params the parameter that come form the path
     * @return array  an array of the params key is the argument name and value is the value of that argument
     * @throws \ReflectionException
     */
    private function getActionArguments(string $controller, string $action, array $params):array
    {
        $args = [];
        $method = new ReflectionMethod($controller, $action);
        foreach ($method->getParameters() as $parameter) {
            $name = $parameter->getName();
            $args[$name] = $params[$name];
        }

        return $args;
    }

    private function getControllerName(array $params):string
    {
        $controller = $params['controller'];
        $controller = str_replace('-', '', ucwords($controller, '-'));

        // temporarily check if the controller Name come from the match pattern
        // add controller to it
        if(!str_contains('Controller', $controller)) {

            $controller .= 'Controller';
        }

        $namespace = "App\Controller";
        if (array_key_exists('namespace', $params)) {
            $namespace .=  '\\' . $params['namespace'];
        }


        return $namespace . "\\" . $controller;
    }

    private function getActionName(array $params):string
    {
        $action = $params['action'];
        $action = lcfirst(str_replace('-', '', ucwords(strtolower($action), '-')));
        return $action;
    }

    private function getObject(string $class_name):object
    {
        $reflection = new ReflectionClass($class_name);
        $constructor = $reflection->getConstructor();

        $dependencies = [];

        if ($constructor === null) {
            return new $class_name;
        }
        foreach ($constructor->getParameters() as $parameter) {
                $type = (string) $parameter->getType();
                $dependencies[] = $this->getObject($type);
        }
        return new $class_name(...$dependencies);

    }
}
