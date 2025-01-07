<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR);



require './vendor/autoload.php';

use Slim\Factory\AppFactory;
use app\classes\TwigGlobal;

session_start();

$app = AppFactory::create();


require './app/routes/site.php';


$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($request, $response){
    $response->getBody()->write('Page not found');
    return $response;
});

$app->run();