<?php
/*
2) Faça um algoritmo que leia o nome, o sexo e o estado civil de uma pessoa. Caso sexo seja “F” e
estado civil seja “CASADA”, solicitar o tempo de casada (anos).
*/

// aceita acentuação
ini_set('default_charset','UTF-8');

class Pessoas
{
     private $nome;
     private $idade;
     private $sexo;
     private $estadoCivil;

     function __construct($nome, $idade, $sexo, $estadoCivil)
     {
          $this->nome = $nome;
          $this->idade = $idade;
          $this->sexo = $sexo;
          $this->estadoCivil = $estadoCivil;
     }

     public function getObjeto()
     {
          echo json_encode(array(
               'nome' => $this->nome,
               'idade' => $this->idade,
               'sexo' => $this->sexo,
               'estado Civil' => $this->estadoCivil
          ));
     }
     public function getSexo()
     {
          return $this->sexo;
     }
     public function getEstadoCivil()
     {
          return $this->estadoCivil;
     }
     public function getNome()
     {
          return $this->nome;
     }
}
// Possíveis valores para "criar" pessoas
$nomes = array(
     'F' => array('Maria', 'Ana', 'Vitória', 'Larissa'),
     'M' => array('Lucas', 'João', 'Erik', 'Gabriel')
);
// range cria um array de 20 à 35
$idades =range(20, 35);
$sexos = array('F', 'M');
$estadosCivis = array(
     'F' => array('solteira', 'casada'),
     'M' => array('solteiro', 'casado')
);

$sexo = $sexos[rand(0, 1)];
$idade = $idades[rand(0, count($idades) - 1)];
if($sexo  == 'F')
{
     $nome = $nomes['F'][rand(0, 3)];
     $estadoCivil = $estadosCivis['F'][rand(0, 1)];

} else{

     $nome = $nomes['M'][rand(0, 3)];
     $estadoCivil = $estadosCivis['M'][rand(0, 1)];

}

$pessoa = new Pessoas($nome, $idade, $sexo, $estadoCivil);

if(($pessoa->getSexo() == 'F') && ($pessoa->getEstadoCivil() == 'casada'))
{
     echo 'Quanto tempo de casada '.$pessoa->getNome().'?'. '<br />';
     echo '<input type="text" name="tempoCasada" />';
     echo '<input type="submit" name="submit" value="Ok" /><br />';
}

 ?>
