<?php


// autoloader:
/*
 * instead of requiring each file or each class file you can use
 * autoloader to autoload it when it used
 *
 * so when you try to define an object of the class php will run
 * the autoloader then it will require the class file
 *
 *
 * how to add the autoloader
 *  - spl_autoloader_register(callback function)
 *  - call back function
 *    => ( function (string $class_name) {
 *          $class_name = str_replace('\\', '/', $class_name)
 *           require "src/$class_name.php";
 *        });
 *  - with this autoloader you need to use namespaces to make it work
 *    correctly.
 *
 * Note:
 *  - php is case-sensitive with files in some operating system and
 *    to fix that
 * - \\ so the php recognize tha this is a backslash not a scape char
 */

// Namespaces in PHP:
/*
 * - you cannot have to class with the same name in the php script but
 *   with namespace you can do
 * - use the namespace in the top of the page
 * - you can have as many as namespaces as you like seperated
 *   with backslashes
 *
 *
 * The route namespace:
 *  - pdo for example is not related to the current namespace to fix that
 *    just use \ at the beginning
 *    \PDO
 *  - this mean php will not looking for the current namespace rather it
 *    will start from the root. like referring the file in the root system
 *
 * Notes:
 *  - how we define the namespace here
 *    => the route will be the same in all our application, and it related
 *       to the framework so we call Framework\Router
 *    => while the controller and the model will be different from app to
 *       another app so we name it App
 */