<?php

// the result will be
/*
 *  - index.php
 *      => $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 *         $segments = explode('/', $path);
 *         $action = $segments[2];
 *         $controller = $segments[1];
 *
 *
 *  - .htaccess
 *      => RewriteEngine On
 *         RewriteRule ^ index.php
 */



// how to get a pretty url:
/*
 * - first we got all the request going through the front controller
 *
 * pretty url looks like
 *  - https://ali-muzayan.com/index
 *  - https://ali-muzayan.com/posts
 *  - https://ali-muzayan.com/admin/user
 *
 *
 * Traditional PHP: URL = file:
 *  - the url was point to the path of a file in the file system
 *  - and if you use this pretty url it look like you tell to go to those
 *    folder and at the end looking for the default file which
 *    is the index
 *
 *
 * how to get that:
 *  - you should use apache to tell it to resend all the requests from
 *    https://ali-muzayan.com/
 *    to the index what ever come next
 *    https://ali-muzayan.com/lablab/lab/lah => index.php
 *
 *
 * to force request to go to the index:
 *  - you need to edit the configuration of the apache or just use
 *    .htaccess file
 *
 * .htaccess file
 *  - RewriteEngine On
 *    RewriteRule ^ index.php
 *  - that said rewrite engine and rewrite the rule so whatever
 *    the request url is request index.php
 *
 *
 * using $_SERVER
 *  - we can use PATH_INFO, but this is not always available
 *    so we will use REQUEST_URI
 *  - why accessing the $_SERVER['REQUEST_URI'] to get the pretty path
 *    we added
 *  - the we need to remove the query string from the url
 *    using parse_url() function
 *
 * $path = parse_urL($_SERVER["REQUEST_URI"], PHP_URL_PATH);
 *
 *
 * explode the result to get the controller and action
 *  - if you follow a convention you can do that to get the controller
 *    and the action
 * $segments = explode('/',$path);
 *  - element one will contain the controller and the second will contain
 *    the controller
 *
 * Note:
 *  - before using we might get the action by the get query but know
 *    you can just use the segments
 *
 *
 *
 */

