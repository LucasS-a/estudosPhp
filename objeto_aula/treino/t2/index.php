<?php

require_once("config.php");

$p1 = new ContaBanco();

$p2 = new ContaBanco();

$p1->abrirConta("CC");
$p1->setNumeroConta(1111);
$p1->setTitular("Jubileu");

$p2->abrirConta("CP");
$p2->setNumeroConta(2222);
$p2->setTitular("Creusa");

$p1->depositar(300);
$p2->depositar(500);

$p2->sacar(100);

$p2->pagarMensalidade();

echo $p2;

 ?>
