<?php

function classAutoLoader($class)
{
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";
    if (is_file($the_path) && !class_exists($class)) {
        include_once $the_path;
    }
}
spl_autoload_register('classAutoLoader');


// Header function for redirect

function redirect($location)
{
    header("Location:$location");
}
