<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'bootstrap.php';

use Code\Controller\PageController;
use Code\Controller\ProdController;
use Code\View\View;

$url = ($_SERVER['REQUEST_URI']);
$url = explode('/',$url);
array_shift($url);
array_shift($url);

if (isset($url[0]) && $url[0]){
    $controller = $url[0];
}else {
    $controller = 'page';
}

if (isset($url[1]) && $url[1]){
    $action = $url[1];
}else {
    $action = 'index';
}

if (isset($url[2]) && $url[2]){
    $param = $url[2];
}else {
    $param = null;
}

if(!class_exists($controller = "\Code\Controller\\".ucfirst($controller).'Controller')) {
    $view = new View('site/404.phtml');
    die($view->render());
}
if (!method_exists($controller,$action)){
    $action = 'index';
    $param  = $url[1];
};

$response = call_user_func_array([new $controller,$action], [$param]);


echo $response;
//$execute = new $controller;
//echo $execute->index();