<?php

/*
 * without mvc:
 *  - your file will have a mixed code of html and code handle the db
 *  - and separate each file so each one will need a connection to the
 *    database
 *  - and as you add files it can very quickly become unstructured,
 *    unmanageable and unmaintainable with includes
 *  - to solve you need mvc patter
 *
 * MVC patter
 *  - is consist of 3 parts
 *    => Controller
 *       handle the request and response
 *       when a user clicks on a link, the response is generally
 *       some content or redirect or whatever
 *
 *    => Model
 *       handle the data and the request to the database
 *
 *    => View
 *       they present the data to the use
 *
 *
 * What is the advantages of using MVC patters:
 *  - splitting up your code
 *  - meaning the development is faster, improve security,
 *    and maintainability
 *
 * you can get the controller and the action from the url
 * and pass it directly if they follow the convention
 */


// Notes:
/*
 * dsn variable
 *  - which will contain the database server, host, charset, and the port
 *  - "mysql:host=localhost;dbname=notes;charset=utf8;port=3306";
 *
 *
 * htmlspecialchars
 *  - when output something come from the user or form the database
 *  - display it with htmlspecialchars to ignore the css attack
 *
 * php-fig.org
 *  - php standards recommendations
 */