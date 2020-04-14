<?php

// função que recebe um array e o imprime na tela
function demonstrar($array)
{
     foreach ($array as $key => $value) {
          // se o value for um array chama a função de forma recursiva
          if(is_array($value))
          {
               demonstrar($value);
               echo "<br>";
          }else {
               echo "$key: $value <br>";
          }
     }
}

// estabelece a conexão com banco de dados
$conn = new PDO('mysql:host=127.0.0.1;dbname=TEST', 'root', 'root');

// prepara o comando com os valores requisitados
$stmt = $conn->prepare("SELECT * FROM Alunos ORDER BY ID");

// executa o comando
$stmt->execute();

// busca todos os valores associados
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(is_array($result))
{
     demonstrar($result);
}


 ?>
