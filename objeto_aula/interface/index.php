<?php

/*
     Interfaces de objetos permitem a criação de códigos que especificam
quais métodos uma classe deve implementar, sem definir como esses métodos
serão tratados.
     Obrigando a classe ter os métodos e atributos definidas na 'interface',
e os métodos devem ter a mesma quantidade de parâmetros, os atributos e métodos
devem ter o mesmo encapsulamento.
 */
interface Veiculo
{
     public function acelerar($velocidade);
     public function frenar($velocidade);
     public function trocarMarcha($marcha);
}

class Civic implements Veiculo
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

$carro =  new Civic();

$carro->trocarMarcha(1);

 ?>
