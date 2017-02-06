<?php

//    Projeto fase 2

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;

$app->mount("/busca", include 'busca.php');
$app->mount("/listagem", include 'listagem.php');

$app->run();
