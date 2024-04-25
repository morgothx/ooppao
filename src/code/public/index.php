<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once ("../controller/Main.php");
require_once '../controller/Router.php';


use MyNamespace\MyClass;

$main = new Main();
$router = new Router();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $router->response();
} else {
    $myClass = new MyClass();
    $myClass->great();
    echo $main->renderView();
}
