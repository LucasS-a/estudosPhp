<?php

$conn = new PDO("mysql:host=localhost;dbname=TEST", 'root', 'root');

// comando a ser requisitado
$stmt = $conn->prepare("DELETE FROM Alunos where ID = 9");

$stmt->execute();


 ?>
