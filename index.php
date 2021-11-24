<?php 
// composer autoload
require './vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$app_name = getenv('APP_NAME');
$app_name2 = $_ENV['APP_NAME'];
$app_name3 = $_SERVER['APP_NAME'];

echo $app_name;
echo '<br>';
echo $app_name2;
echo '<br>';
echo $app_name3;

echo '<hr>Debug:<br>';

echo 'getenv() = ';
var_dump($app_name);
echo '<br>';
echo '$_ENV[] = ';
var_dump($app_name2);
echo '<br>';
echo '$_SERVER[] = ';
var_dump($app_name3);

