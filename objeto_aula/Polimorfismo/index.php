<?php

/*
     É a capacidade de uma classe implementar
um método da classe 'pai' com o mesmo nome, mas
com funcionamento diferente.
*/

abstract class Animal
{
     public function falar()
     {
          return "som";
     }

     public function mover()
     {
          return "anda";
     }
}
class Cachorro extends Animal
{
     public function falar()
     {
          return "late";
     }
}
class Passaro extends Animal
{
     public function falar()
     {
          return "canta";
     }
     public function mover()
     {
          //'parent' se refere a classe 'pai'.
          // é como se fosse o 'this'.
          return "voa e " .parent::mover();
     }
}

$pluto = new Cachorro();

echo $pluto->falar() . '<br>';
echo $pluto->mover() . '<br>';

echo "---------------------------<br>";

$piupiu = new Passaro();

echo $piupiu->falar() . '<br>';
echo $piupiu->mover() . '<br>';
 ?>
