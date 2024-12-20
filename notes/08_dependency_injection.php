<?php


//Dependency Injection (DI)
/*
 * - for example the controller class use an object of teh viewer class, so
 *   instead of reference to the class directly from the other class
 *
 * - the controller class dependent on the viewer class
 * - why need to dependency
 *   => to not create an object each time
 *   => make it easier to automated tests for this code
 *
 * How to add:
 *  - you need to use constructor function, so instead for creating the
 *    viewer object inside the class itself, we inject it
 *
 *  - when initialize the controller you need to inject the viewer class
 *
 *
 */

// use reflection to get the controller constructor arguments:
/*
 * not all the controller have the same dependencies
 *  - declare an empty array which will contain our dependencies
 *  - use reflectionClass, and pass the class name
 *  - and use getConstructor() method to get the constructor of that class
 *  - if it not null use getParameter to get the parameter of that class
 *  - iterate those parameter to get the type of each one and instantiate
 *    an object of each and add to our dependencies
 *
 * a problem that we will face
 *  - each dependencies object might have its dependencies to
 *  - so we need to create all dependencies in the object graph using
 *    recursion.
 *
 *
 * using graph of dependencies:
 *  - declare a getObject method which will return the controller object
 *    passing all the dependencies object it need
 *  - declare an empty array to contain the dependencies
 *
 *  - use reflection class to get the reflector
 *  - use getConstructor() to get the constructor of this class
 *
 *  - if the constructor === null then return an object of the class name
 *
 *  -  otherwise get the parameters of teh constructor
 *  - iterate those parameter to get the type of each and instantiate
 *    an object of it and using getObject you can instantiate a new object
 *    and pass it the parameters
 *
 *  - why using get object again (recursion)
 *    => we use get object instead of just create an instance directly to
 *       pass the argument of this dependency constructor if there are
 *       arguments needed
 *   - add all the dependency in the dependencies array
 *
 *
 *  - then return the class name and pass the arguments to it (don't forget
 *    to packing it using the 3 dots (...))
 *
 *
 *
 *
 */