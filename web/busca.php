<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once 'bootstrap.php';

$busca = $app['controllers_factory'];

$busca->get('/{id}', function(Request $request, $id) use ($em) {
$post = $em->find('\SON\Entity\Post', $id);

$pesquisa = "
            <title>Projeto fase 2</title>
            <br>
            <h1>Os tipos de motos</h1>
            <h1>Titulo:{$post->getTitulo()}</h1>
            <h1>Conteudo:{$post->getConteudo()}</h1>";
return $pesquisa;
//    return new Response($pesquisa);
});

//->bind('busca');

return $busca;