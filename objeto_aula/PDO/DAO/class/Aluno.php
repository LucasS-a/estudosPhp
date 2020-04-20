<?php

class Aluno
{
     private $nome;
     private $email;
     private $data_nascimento;
     private $id;

//------------------------Métodos-----------------------------------------------

// Busca os dados da pessoa do id indicado
     public function loadById($id)
     {
          $sql = new DAO();

          $comando = "SELECT * FROM Alunos WHERE ID = :ID";

          $params = array(":ID" => $id);

          $results = $sql->select($comando, $params);

          if (count($results) > 0)
          {
               $this->setData($results[0]);
          }
     }

// Função que insere no Banco de dados, atáves de uma procedure
     public function insert()
     {
          $sql = new DAO();

          $comando = "CALL insert_Aluno(:NOME, :EMAIL, :NASCIMENTO)";

          $params = array(
               ':NOME'       => $this->getNome(),
               ':EMAIL'      => $this->getEmail(),
               ':NASCIMENTO' => $this->getDataNascimento()
          );
          // Utiliza a select pois necessita do retorno para setar os dados no
          // objeto.
          $result = $sql->select($comando, $params);

          if (count($result) > 0)
          {
               $this->setData($result[0]);

          } else {
               echo 'erro na inserção!';
          }
     }

// Função Login
     public function login($nome, $email)
     {
          $sql = new DAO();

          $comando = "SELECT * FROM Alunos WHERE nome = :NOME AND email = :EMAIL";

          $params = array(
               ':NOME'  => $nome,
               ':EMAIL' => $email
          );

          $result = $sql->select($comando, $params);

          if (count($result) > 0)
          {
               $this->setData($result[0]);

          } else {

               echo "Nome ou email incorreto!";

          }

     }
// Função altera os valores de um usuario
     public function update($nome, $email)
     {
          $this->setNome($nome);

          $this->setEmail($email);

          $sql = new DAO();

          $comando = "UPDATE Alunos SET nome = :NOME, email = :EMAIL WHERE ID = :id";

          $param = array(
               ':NOME'  => $this->getNome(),
               ':EMAIL' => $this->getEmail(),
               ':id'    => $this->getId()
          );

          $sql->query($comando, $param);

     }
// Função DELETE
     public function delete()
     {
          $sql = new DAO();

          $comando = "DELETE FROM Alunos WHERE ID = :id";

          $param = array(
               ":id" => $this->getId()
          );

          $sql->query($comando, $param);

          $this->setData(array(
               'nome'            => NULL,
               'email'           => NULL,
               'data_nascimento' => NULL,
               'ID'              => NULL
          ));
     }
// Função que auxilia a login() e loadById().
     private function setData($param)
     {
          $this->setNome($param['nome']);
          $this->setEmail($param['email']);
          // DateTime(): tranforma em um objeto
          $this->setDataNascimento(new DateTime($param['data_nascimento']));
          $this->setId($param['ID']);
     }
//------------------------Métodos Staticos--------------------------------------
// Retorna um json com todos os dados que estão no banco
     public static function getList()
     {
          $sql = new DAO();

          $result = $sql->select("SELECT * FROM Alunos ORDER BY ID;");

          return json_encode($result, JSON_UNESCAPED_UNICODE);
     }
//------------------------Métodos Mágicos---------------------------------------
     public function __construct($nome = "", $email = "", $nascimento = "")
     {
          $this->setNome($nome);
          $this->setEmail($email);
          $this->setDataNascimento($nascimento);
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

//-------------------------------GETS-------------------------------------------
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
//-------------------------------SETS-------------------------------------------
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
