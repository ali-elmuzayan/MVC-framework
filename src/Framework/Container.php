<?php
declare(strict_types=1);

namespace Framework;
use ReflectionClass;
use Closure;
use ReflectionNamedType;

class Container
{

    private array $registry = [];

    public function set(string $name, Closure $value):void
    {
        $this->registry[$name] = $value;
    }

    /**
     * @throws \ReflectionException
     */
    public function get(string $class_name):object
    {
        if (array_key_exists($class_name, $this->registry)) {
            return $this->registry[$class_name]();
        }



        $reflection = new ReflectionClass($class_name);
        $constructor = $reflection->getConstructor();

        $dependencies = [];

        if ($constructor === null) {
            return new $class_name;
        }

        foreach ($constructor->getParameters() as $parameter) {
            $type =  $parameter->getType();

            if ($type === null) {
                exit ("Constructor parameter '{$parameter->getName()}'
                 in the $class_name class has no type declaration");
            }


            if ($type->isBuiltIn()) {
                exit("Unable to resolve constructor parameter 
                '{$parameter->getName()}' of type '$type' in the 
                $class_name class");
            }

            if (! ($type instanceof ReflectionNamedType)) {
                exit ("Constructor parameter '{$parameter->getName()}'
                in the $class_name class is an invalid type: '$type'
                - only single named types supported
                ");
            }

            $dependencies[] = $this->get((string) $type);
        }

        return new $class_name(...$dependencies);

    }


}