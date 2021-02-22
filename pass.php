#!/usr/bin/php -q
<?php

require(__DIR__.'/vendor/autoload.php');
//use Symfony\Component\Dotenv\Dotenv;


$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();


$MONGO_URL = $_ENV['MONGO_URL'];

$mongo = new MongoDB\Client($MONGO_URL);
$colección = $mongo->test_rabbit->beers;



$Rut        = $argv[1];
$Fono       = $argv[2];
$uniqueid   = $argv[3];
$servidor   = $argv[4];
$task       = $argv[5];
$respuesta  = $argv[6];

$resultado = $colección->insertOne( [ 'Rut' => $Rut, 'Fono' => $Fono, 'uniqueid' => $uniqueid, 'servidor' => $servidor, 'task' => $task, 'respuesta' => $respuesta,] );


?>