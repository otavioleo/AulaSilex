<?php

//    Projeto fase 1

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once 'bootstrap.php';
$data = array(
    'id' => array('Scrambler', 'Tracker', 'Bobber', 'Café racer', 'Custom', 'Chopper', 'Esportiva', 'Fun Bike', 'Big biker', 'Maxi-Trail')
);

$app->get('/posts/{id}', function(Silex\Application $app, $id) use ($data) {

           $res = "";
           $c = 0;
           foreach ($data['id'] as $d) {
              $c++;
              if ($c == $id) {
                 $res = 'id=' . $c . ', conteudo=' . $d . '<br>';
              }
           }
           if (empty($res)) {
              $app->abort(404, 'Nao encontrou!');
           } else {
//      return($res);
              return $app['twig']->render('posts.twig', array('res' => $res));
           }
        })
        ->bind('posts');


$app->run();
