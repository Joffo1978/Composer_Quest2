<?php

require_once realpath('../vendor/autoload.php');
//require '../src/Hello.php';

//require __DIR__ . '/../vendor/autoload.php';
//use App;

//$loader->addPsr4('App\\', '../vendor/autoload.php');

$moi = new App\Hello();

$moi->talk();