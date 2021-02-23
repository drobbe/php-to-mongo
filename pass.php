#!/usr/bin/php -q
<?php

require(__DIR__.'/vendor/autoload.php');
//use Symfony\Component\Dotenv\Dotenv;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$MONGO_URL  = $_ENV['MONGO_URL'];
$DATABASE   = $_ENV['DATABASE'];
$COLECCTION = $_ENV['COLECCTION'];

$mongo = new MongoDB\Client($MONGO_URL);
$colección = $mongo->$DATABASE->$COLECCTION;



$Rut        = $argv[1];
$Fono       = $argv[2];
$uniqueid   = $argv[3];
$servidor   = $argv[4];
$task       = $argv[5];
$respuesta  = $argv[6];

$resultado = $colección->insertOne( [ 'Rut' => $Rut, 'Fono' => $Fono, 'uniqueid' => $uniqueid, 'servidor' => $servidor, 'task' => $task, 'respuesta' => $respuesta,] );


?>