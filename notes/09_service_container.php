<?php

// container:
/*
 * previously we were making the dispatcher to create dependencies automatically
 * by retrieving the classes of constructor, with getMethod we had.
 *
 * why we need the container?
 *  - because the way we get our object in th dispatcher will have a lot
 *    of bugs. so we should have a service container that solve those bugs
 *    and work efficiently.
 *
 * container->getMethod;
 *  - will check if the class name exist in the registry which is an array
 *    that will contain the object we created by the set method
 *  - if not it will do its job as we explained in the previous lecture
 *
 *
 * container->bind($class_name, closure $value)
 *  - we will use this method to create an object too, but this type of
 *    object will not able to be initialized by the getObject
 *  - objects like database object
 *
 */

// handle error
/*
 * some error was not clear because of the code we write in the get method
 * so we need to do something to make it clear
 *
*/



// adding strict type:
/*
 * by adding strict type you will make it easier to find bugs
 * - you should enable it in each class
 * - and also in the front controller => index.php
 */