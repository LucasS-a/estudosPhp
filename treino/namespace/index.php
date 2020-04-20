<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma");
$cad->setEmail("djalma@email.com");
$cad->setSenha("123544567");

$cad->registrarVenda();

 ?>
