<?php

require_once("config.php");

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

// cria  o objeto
$banco = new DAO();

// comando sql
$sql = "SELECT * FROM Alunos";

// o array com parametros
$params = array();

$result = $banco->select($sql, $params);

if(is_array($result))
{
     demonstrar($result);
}
 ?>
