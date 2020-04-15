<?php

class Aluno
{
     private $nome;
     private $email;
     private $data_nascimento;
     private $id;

     // busca os dados da pessoa do id indicado
     public function loadById($id)
     {
          $sql = new DAO();

          $comando = "SELECT * FROM Alunos WHERE ID = :ID";

          $params = array(":ID" => $id);

          $results = $sql->select($comando, $params);

          if (count($results) > 0)
          {
               $row = $results[0];
               $this->setNome($row['nome']);
               $this->setEmail($row['email']);
               // DateTime(): tranforma em um objeto
               $this->setDataNascimento(new DateTime($row['data_nascimento']));
               $this->setId($row['ID']);
          }
     }
     // retorna um json com todos os dados que estão no banco
     public static function getList()
     {
          $sql = new DAO();

          $result = $sql->select("SELECT * FROM Alunos ORDER BY ID;");

          return json_encode($result, JSON_UNESCAPED_UNICODE);
     }
     private function insert()
     {
          $sql = new DAO();

          // faz parte do código sql
          $tabela = "Alunos(nome, email, data_nascimento)";
          // comando a ser requisitado
          $comando = "INSERT INTO $tabela VALUES(:NOME, :EMAIL, :NASCIMENTO)";

          $params = array(
               ':NOME'       => $this->getNome(),
               ':EMAIL'      => $this->getEmail(),
               ':NASCIMENTO' => $this->getDataNascimento()
          );

          $sql->query($comando, $params);


          echo 'foi';

     }
     public function __construct($nome, $email, $data_nascimento)
     {
          $this->setNome($nome);
          $this->setEmail($email);
          $this->setDataNascimento($data_nascimento);

          // inseri no Banco de Dados
          $this->insert();
     }
     public function __toString()
     {
          return json_encode(array(
               "nome"            => $this->getNome(),
               "email"           => $this->getEmail(),
               "data nascimento" => $this->getDataNascimento()->format("d/m/Y"),
               "id"              => $this->getId()
          ));
     }

//-----------------GETS---------------
     public function getNome()
     {
          return $this->nome;
     }
     public function getEmail()
     {
          return $this->email;
     }
     public function getDataNascimento()
     {
          return $this->data_nascimento;
     }
     public function getId()
     {
          return $this->id;
     }
//-----------------SETS---------------
     public function setNome($nome)
     {
          $this->nome = $nome;
     }
     public function setEmail($email)
     {
          $this->email = $email;
     }
     public function setDataNascimento($data_nascimento)
     {
          $this->data_nascimento = $data_nascimento;
     }
     public function setId($id)
     {
          $this->id = $id;
     }
}

 ?>
