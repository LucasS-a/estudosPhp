<?php
/*
     Classes definidas como abstratas não podem ser instanciadas,
ao herdar uma classe abstrata, todos os métodos marcados como abstratos
na na declaração da classe pai devem ser implementados na classe filha
*/
interface Veiculo
{
     public function acelerar($velocidade);
     public function frenar($velocidade);
     public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo
{
     public function acelerar($v)
     {
          echo "O veículo acelerou até a velocidade $v Km/h.";
     }
     public function frenar($v)
     {
          echo "O veículo frenou até a velocidade $v Km/h.";

     }
     public function trocarMarcha($marcha)
     {
          echo "O veículo engatou a marcha $marcha.";
     }
}

class DelRey extends Automovel
{
     public function empurrar()
     {

     }
}
// não pode instanciá uma classe abstrata
// $carro = new Automovel();

$carro = new DelRey();

$carro->acelerar(60);


 ?>
