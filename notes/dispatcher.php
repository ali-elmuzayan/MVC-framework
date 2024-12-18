<?php


// dispatcher
/*
 * what is dispatcher:
 *  - dispatcher is going to handle the request
 *
 *
 * create a dispatcher method to handle the request:
 *  - add method called handle
 *  - the handle method will get the path as argument
 *
 *  - and check if the path match in the route class return teh params
 *  - handle method will return the controller and if the route is not
 *    right will return the false
 *
 *
 * Pass route variables to the action method as arguments
 *  - the method in the controller could have arguments, also we don't know
 *    that, some could have other could not
 */

// use reflection to get the action method argument names:
/*
 * by using the ReflectionMethod class
 *  - we can get the parameters of the method
 *  - and assign it to the action
 */

// allow multiple-word controller classes and action
/*
 * - classes => StudlyCaps
 * - methods => camelCase
 *
 * - we need a way to represent multiple word controller class names and
 *   action method names
 *
 * - we will do this using hyphens, any controller class that has more
 *   than one word will separate with a hyphen in the URL
 *   likewise with the action
 * - controller => UserAdmin => user-admin
 * - action     => addNew    => add-new
 *
 * methods we need:
 *  - get controller name
 *  - get action name
 */

// add a namespace controller option
/*
 *
 */