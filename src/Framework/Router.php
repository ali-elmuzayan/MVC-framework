<?php

namespace Framework;

class Router
{
    private array $routes = [];

    public function add(string $path, array $params = []): void {
        $this->routes[] = [
            'path' => $path,
            'params' => $params
        ];
    }

    public function match(string $path) {
        $path = trim($path, '/');

//        $pattern = "#^/(?<controller>[a-z]+)/(?<action>[a-z]+)$#";

        foreach ($this->routes as $route) {

           $pattern =  $this->getPatternFromRoutePath($route['path']);
            if (preg_match($pattern, $path, $matches)) {
                $matches = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                $params = array_merge($route['params'], $matches);

                return $params;
            }
        }

        return false;
    }

    private function getPatternFromRoutePath(string $path) :string {
        // remove the / in the boarding
        $path = trim($path, '/');

        // array of segments by seperated by /
        $segments = explode('/', $path);

        // iterate all items to return the variable - {var} in the new shape
        $segments = array_map(function (string $segment) :string {
            if(preg_match("#^\{([a-z][a-z0-9]*)}\$#", $segment, $matches)){

            $segment =  '(?<' . $matches[1] . '>[^/]*)';
            } else if(preg_match("#^\{([a-z][a-z0-9]*):(.+)}\$#", $segment, $matches)){

                $segment =  '(?<' . $matches[1] . '>' . $matches[2] .')';
            }

            return $segment;

        }, $segments);

        return '#^' . implode('/', $segments) . '$#iu';

    }

}