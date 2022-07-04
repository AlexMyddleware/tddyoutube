<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

$name = $_GET['name'];
header('Content-type: text/html');
http_response_code(200);
echo "hello $name";
