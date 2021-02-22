#!/usr/bin/php -q
<?php

require 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

var_dump($dotenv);exit;

$cliente = new MongoDB\Client("mongodb://localhost:27017");
$colección = $cliente->demo->beers;

$resultado = $colección->insertOne( [ 'testar' => 'Hinterland', 'brewery' => 'BrewDog' ] );


$Rut = $argv[1];



function saveDataBase($data)
{
        $clase = new BotCollect();
        $clase->process($data);
}

?>