<?php

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

 ?>
