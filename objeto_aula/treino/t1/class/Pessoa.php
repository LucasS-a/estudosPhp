<?php


class Pessoa
{
     private $nome;
     private $idade;
     private $sexo;

     /*------------MÉTODOS------------*/

     public function fazerNiver()
     {
          $this->idade ++;
     }

     /*--------MÉTODOS MÁGICAS--------*/

     public function __construct($nome, $idade, $sexo)
     {
          $this->nome = $nome;
          $this->idade = $idade;
          $this->sexo = $sexo;
     }
     public function __toString()
     {
          return json_encode(array(
               'nome' => $this->nome,
               'idade'=> $this->idade,
               'sexo' => $this->sexo
          ));
     }

     /*-----------GETS-----------------*/

     public function getNome()
     {
          return $this->nome;
     }

     public function getIdade()
     {
          return $this->idade;
     }

     public function getSexo()
     {
          return $this->sexo;
     }

     /*------------SETS-----------------*/

     public function setNome($nome)
     {
          $this->nome = $nome;
     }

     public function setIdade($idade)
     {
          $this->idade = $idade;
     }

     public function setSexo($sexo)
     {
          $this->sexo = $sexo;
     }

}

 ?>
