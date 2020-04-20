<?php

require_once("config.php");


/*Carrega um usuario
$pessoa = new Aluno();

$pessoa->loadById(1);

echo $pessoa;*/

//--------------------------------------
/*Carrega uma lista de usuarios

$lista = Aluno::getList();

echo $lista;*/
//-----------------------------------------
/* Função login()
$pessoa = new Aluno();

$pessoa->login('Lurmino', 'lurmino@gmail.com');

echo $pessoa;
*/
//-----------------------------------------
/* inseri um novo elemnto no Banco
$pessoa = new Aluno('Samiscreu', 'samiscreu@gmail.com', '2001-07-25');

$pessoa->insert();

echo $pessoa;*/
//-------------------------------------------
/* Altera o dados de um ualuno
$pessoa = new Aluno();

$pessoa->loadById(1);

$pessoa->update("Lurmino", "lurmino@gmail.com");

echo $pessoa;*/
//--------------------------------------------
// Deleta um aluno
$pessoa = new Aluno();

$pessoa->loadById(17);

$pessoa->delete();

echo $pessoa;

 ?>
