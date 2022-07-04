<?php

use Twitter\Http\Response;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';



$name = $_GET['name'];

$response = new Response();

header('Content-type: text/html');
http_response_code(200);
echo "hello $name";
