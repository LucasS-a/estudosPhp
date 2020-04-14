<?php

/*
     A classe filha acessa atributos e métodos da classe
progenitora, que não seja 'private'.
*/

class Documento
{
     private $numero;

     public function getNumero()
     {
          return $this->numero;
     }
     public function setNumero($numero)
     {
          $this->numero = $numero;
     }
}
class Cpf extends Documento
{

     public function validar():bool
     {
          $numeroCpf = $this->getNumero();

          //validação do Cpf

          return true;
     }
}

$doc = new Cpf();

$doc->setNumero("11111111-44");

var_dump($doc->validar());

echo '<br>';

echo $doc->getNumero();

 ?>
