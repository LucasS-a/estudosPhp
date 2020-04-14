<?php

//Quando as classes estão em diretórios diferentes


function incluirClass($nomeClass)
{
     if (file_exists("$nomeClass.php") === true)
     {
          require_once("$nomeClass.php");
     }
}

spl_autoload_register("incluirClass");
spl_autoload_register(function($nomeClass){

     if (file_exists("abstrata". DIRECTORY_SEPARATOR . "$nomeClass.php") === true)
     {
          require_once("abstrata". DIRECTORY_SEPARATOR ."$nomeClass.php");
     }
});

$carro = new DelRey();

$carro->acelerar(65);

 ?>
