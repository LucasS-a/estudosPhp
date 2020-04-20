<?php

class Sql extends PDO
{
     private $conn;

     public function __construct()
     {
          $this->conn = new PDO("mysql:host=localhost;dbname=Mercado", 'root', 'root');
     }
// função que recebe comandos que necessita retorno
// o retorno dessa função é para auxiliar a função $this->select();
     public function query($rawQuery, $params = array())
     {
          $stmt = $this->conn->prepare($rawQuery);

          $this->setParams($stmt, $params);

          $stmt->execute();

          return $stmt;

     }

// função que auxilia a função $this->query()
     private function setParams($stmt, $params)
     {
          foreach ($params as $key => $value)
          {
               $this->setParam($stmt, $key, $value);
          }
     }
     private function setParam($stmt, $key, $value)
     {
          $stmt->bindParam($key, $value);
     }

// Essa função retorna um array com os dados que estavam no Banco
     public function select($rawQuery, $params = array()):array
     {
          $stmt = $this->query($rawQuery, $params);

          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

          return  $result;
     }
}

?>
