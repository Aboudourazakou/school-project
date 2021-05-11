<?php
//On genere une constante qui contiendra le chemin vers index.php

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

$params = explode('/', filter_var($_GET['p']), FILTER_SANITIZE_URL);

require_once(ROOT . "controllers/AuthController.php");
require_once(ROOT . "app/Model.php");
require_once(ROOT . "app/Controller.php");
require_once(ROOT . "routes/routes.php");


$route = new routes();

$method = $params[0];

if (method_exists($route, $method)) {
    unset($params[0]);
    $met = new ReflectionMethod($route, $method); //We get argument in the url and compare them to the method arguments
    $num = $met->getNumberOfParameters();

    if (!($num > count($params) || $num < count($params))) {

        call_user_func_array([$route, $method], $params);
    } else {
        http_response_code(404);
        echo "Page introuvable";
    }
} else  echo "Page introuvable";
