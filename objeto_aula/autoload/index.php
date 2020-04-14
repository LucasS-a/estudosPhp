<?php

function __autoload($nomeClass)
{
     require_once("$nomeClass.php");
     var_dump($nomeClass);
     echo '<br>';
}

//require_once("DelRey.php");

$carro = new DelRey();

$carro->acelerar(55);

 ?>
