<?php

//    Projeto fase 2

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once 'bootstrap.php';

$app->get('/post/{id}', function(Request $request, $id) use ($em) {
           $post = $em->find('\SON\Entity\Post', $id);

           $pesquisa = "
            <title>Projeto fase 2</title>
            <br>
            <h1>Os tipos de motos</h1>
            <h1>Titulo:{$post->getTitulo()}</h1>
            <h1>Conteudo:{$post->getConteudo()}</h1>";
           return $pesquisa;
        })
        ->bind('post');

$app->get('/posts/', function(Request $request) use ($em, $app) {
           $repository = $em->getRepository('\SON\Entity\Post');
           $listaPosts = $repository->findAll();
           $lista = "<h1>Os tipos de motos</h1>";
           foreach ($listaPosts as $post) {
              $lista .= " 
        <br>
        <h1>Titulo:" . $post->getTitulo() . "</h1>
        <h1>Conteudo:" . $post->getConteudo() . "</h1>
        <h1>" . $app['twig']->render('link_lista.twig', array('id' => $post->getId())) . "</h1>
        <br>";
           }

           return $lista;
        })
        ->bind('posts');

$app->run();
