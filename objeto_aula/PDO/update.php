<?php

$conn = new PDO("mysql:host=localhost;dbname=TEST", 'root', 'root');

// define as colunas que seram alteradas
$parametros = "nome = :NOME, email = :EMAIL, data_nascimento = :NASCIMENTO";

// comando a ser requisitado
$stmt = $conn->prepare("UPDATE Alunos SET $parametros WHERE ID = :ID");


$nome = "Germina";
$email = "germina@gmail.com";
$nascimento = "1998-10-17";
$id = "12";

$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":NASCIMENTO", $nascimento);
$stmt->bindParam(":ID", $id);

$stmt->execute();


 ?>
