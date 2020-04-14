<?php

require_once("config.php");

$pessoa[0] = new Pessoa("Lucas", 23, "M");
$pessoa[1] = new Pessoa("David", 19, "M");

$livro[0] = new Livro("PHP Básico", "José da Silva", 300, $pessoa[0]);
$livro[1] = new Livro("POO com PHP", "Maria de Souza", 250, $pessoa[1]);


$pessoa[0]->fazerNiver();

echo $livro[0];


 ?>
