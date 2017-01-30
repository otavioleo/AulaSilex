<?php

namespace SON\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titulo;

    /**
     * @ORM\Column(type="text")
     */
    private $conteudo;

    function getId() {
       return $this->id;
    }

    function getTitulo() {
       return $this->titulo;
    }

    function getConteudo() {
       return $this->conteudo;
    }

    function setId($id) {
       $this->id = $id;
    }

    function setTitulo($titulo) {
       $this->titulo = $titulo;
    }

    function setConteudo($conteudo) {
       $this->conteudo = $conteudo;
    }
  
}