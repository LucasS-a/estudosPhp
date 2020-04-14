<?php

/*
     Os métodos mágicos, são métodos previamente definidos de uma
classe que tem funcionalidades específicas, estes métodos são
precedidos por __, portanto, evite criar métodos em suas classes
usando esta notação, a não ser que seja algo bem específico.
 */
class Endereco
{

     private $rua;
     private $bairro;
     private $cidade;

     public function __construct($rua, $bairro, $cidade)
     {
          $this->rua = $rua;
          $this->bairro = $bairro;
          $this->cidade = $cidade;
     }

     public function __toString()
     {
          return 'rua '.$this->rua.', '.$this->bairro . ' '.$this->cidade;
     }

     public function __destruct()
     {
          var_dump("DESTUIR");
     }
}

$meuEndereco = new Endereco('5', 'rajadinha 2', 'Planaltina');

echo $meuEndereco . '<br>';

 ?>
