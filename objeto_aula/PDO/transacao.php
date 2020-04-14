<?php

$conn = new PDO("mysql:host=localhost;dbname=TEST", 'root', 'root');

$conn->beginTransaction();

// comando a ser requisitado
$stmt = $conn->prepare("DELETE FROM Alunos where ID = 9");

// cancela a transação
$conn->rollBack();
// confirma a transação
//$conn->commit();

$stmt->execute();


 ?>
