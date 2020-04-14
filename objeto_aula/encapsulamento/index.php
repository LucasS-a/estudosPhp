<?php

/**
 * protejer e organizar
 * define quem pode acessa
 */
class Pessoa
{
     // pode ser acessar fora da classe
     public $nome = "Rasmus Lerdof";
     // só não pode ser acessado de fora da classe,
     // apenas dentro dela e de suas filhas
     protected $idade = 48;
     // só pode ser acessada de dentro dessa classe
     private $senha = "123456";

     public function verDados()
     {
          echo $this->nome . "<br>";
          echo $this->idade . '<br>';
          echo $this->senha . "<br>";
     }
}

$objeto = new Pessoa();

$objeto->verDados();

 ?>
