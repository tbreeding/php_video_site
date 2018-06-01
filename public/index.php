<?php

use \tbreeding\mvc\routing\getControllerFromUrl as the_function_that_gets_the_controller_from_the_url;

require_once '../config/app.php';   
require_once '../vendor/tbreeding/mvc/routing.php';
require_once '../vendor/tbreeding/mvc/db.php';
require_once '../app/Song.php';
require_once '../app/Songlist.php';

//BOOTSTRAPPING
//include / require all the necessary files

//ROUTING
//http://www.eshop.test - handle by homepage controller
//http://www.eshop.test?page=product - handle by product controller
//http://www.eshop.test?page=category - handle by category controller

$controller_name = \tbreeding\mvc\routing\getControllerFromUrl();
$controller_class = ucfirst(strtolower($controller_name)) .'Controller';

require '../app/Http/controllers/' . $controller_class . '.php';

$controller_class = '\\app\\Http\\controllers\\' . $controller_class;
$controller = new $controller_class;

$controller->index();