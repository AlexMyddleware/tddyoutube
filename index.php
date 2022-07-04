<?php

use Twitter\Http\Response;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';



$name = $_GET['name'];

$response = new Response();

$response->setHeaders([
    'content-type' => 'text/html'
]);

$response->setStatusCode(200);

http_response_code(200);
echo "Hello $name";
