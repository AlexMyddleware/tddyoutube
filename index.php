<?php

use Twitter\Http\Response;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';



$name = $_GET['name'];


//create response with caracs
$response = new Response();

$response->setHeaders([
    'content-type' => 'text/html'
]);

$response->setStatusCode(200);

$response->setContent("Hello $name");

$response->send();
