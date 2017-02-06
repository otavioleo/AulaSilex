<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once 'bootstrap.php';

$listagem = $app['controllers_factory'];

$listagem->get('/', function(Request $request) use ($em, $app) {
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
//    return new Response($lista);

return $lista;
});

//->bind('listagem');
return $listagem;


