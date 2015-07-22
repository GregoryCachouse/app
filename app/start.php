<?php

require '../vendor/autoload.php';

define('INC_ROOT', dirname(__DIR__));

//aqui llamo a slim

$app = new \Slim\Slim(array(
	'view' => new \Slim\Views\Twig(),
	'templates.path' => INC_ROOT . '/app/views'
	)
);

require 'routes.php';
