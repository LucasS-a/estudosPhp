<?php

require_once("config.php");


/* Carrega um usuario
$pessoa = new Aluno();

$pessoa->loadById(1);

echo $pessoa;
*/
//--------------------------------------
/*Carrega uma lista de usuarios

$lista = Aluno::getList();

echo $lista;*/
//-----------------------------------------
// inseri um novo elemnto no Banco
$pessoa = new Aluno('margatita', 'margatita@gmail.com','2000-01-01');


 ?>
