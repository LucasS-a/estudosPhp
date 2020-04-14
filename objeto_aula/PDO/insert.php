<?php

$conn = new PDO("mysql:host=localhost;dbname=TEST", 'root', 'root');

$tabela = "Alunos(nome, email, data_nascimento)";

// comando a ser requisitado
$stmt = $conn->prepare("INSERT INTO $tabela VALUES(:NOME, :EMAIL, :NASCIMENTO)");

$nome = "Gertrudes";
$email = "gertrudes@gmail.com";
$nascimento = "1999-04-11";

$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":NASCIMENTO", $nascimento);

$stmt->execute();


 ?>
