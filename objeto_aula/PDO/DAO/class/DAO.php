<?php

class DAO extends PDO
{
     private $conn;

     public function __construct()
     {
          $this->conn = new PDO("mysql:host=localhost;dbname=TEST", "root", "root");

     }

     // coloca valores nas nas "variáveis sql"(ex: :ID),que vem no $rawquery.
     private function setParams($statment, $parameters = array())
     {
          foreach ($parameters as $key => $value)
          {
               $this->setParam($statment, $key, $value);
          }
     }
     // quando quer passar apenas um parametro
     private function setParam($statment, $key, $value)
     {
          $statement->bindParam($key, $value);
     }

     // recebe uma $rawQuery um comando sql, que eu irei tratar
     // um $params vão ser uma array com dados
     public function query($rawQuery, $params = array())
     {
          $stmt = $this->conn->prepare($rawQuery);

          $this->setParams($stmt, $params);

          $stmt->execute();

          return $stmt;
     }

     // tratamento do retorno do comando SELECT
     public function select($rawQuery, $params = array()):array
     {
          $stmt = $this->query($rawQuery, $params);

          return $stmt->fetchAll(PDO::FETCH_ASSOC);
     }
}


 ?>
