<?php
spl_autoload_register(function (string $class) {
    $class = str_replace('\\', '/', $class);
    require "src/$class.php";
});