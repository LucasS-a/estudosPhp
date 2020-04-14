<?php

class Livro implements Publicacao
{
     private $titulo;
     private $autor;
     private $totalPaginas;
     private $paginaAtual;
     private $aberto;
     private $leitor;

     /*------------MÉTODOS----------------*/

     public function abrir()
     {
          $this->aberto = true;
     }

     public function fechar()
     {
          $this->aberto = false;
     }
     public function folhear($pagina)
     {
          if ($pagina > ($totalPaginas - $paginaAtual))
          {
               echo "operação inválida";
          } else if($pagina == ($totalPaginas - $paginaAtual))
          {
               $this->paginaAtual = 0;

               $this->aberto = false;
          }else {
               $this->paginaAtual = $pagina;
          }

     }
     public function avancarPagina()
     {
          $this->paginaAtual ++;
     }
     public function voltarPagina()
     {
          $this->paginaAtual --;
     }

     /*------------MÉTODOS MÁGICOS--------*/

     public function __construct($titulo, $autor, $totalPaginas, $leitor)
     {
          $this->titulo = $titulo;
          $this->autor = $autor;
          $this->totalPaginas = $totalPaginas;
          $this->aberto = false;
          $this->paginaAtual = 0;
          $this->leitor = $leitor;
     }

     public function __toString()
     {
          return json_encode(array(
               'titulo'           => $this->titulo,
               'autor'            => $this->autor,
               'total de páginas' => $this->totalPaginas,
               'página atual'     => $this->paginaAtual,
               'aberto'           => $this->aberto,
               'leitor'           => json_encode(array(
                    'nome'  => $this->leitor->getNome(),
                    'idade' => $this->leitor->getIdade(),
                    'sexo'  => $this->leitor->getSexo()
               ))
          ));
     }

     /*-----------GETS-----------------*/

     public function getTitulo()
     {
          return $this->titulo;
     }

     public function getAutor()
     {
          return $this->autor;
     }

     public function getTotalPaginas()
     {
          return $this->totalPaginas;
     }

     public function getPaginaAtual()
     {
          return $this->paginaAtual;
     }

     public function getAberto()
     {
          return $this->aberto;
     }

     public function getLeitor()
     {
          return $this->leitor;
     }

     /*------------SETS-----------------*/

     public function setTitulo($titulo)
     {
          $this->titulo = $titulo;
     }

     public function setAutor($autor)
     {
          $this->autor = $autor;
     }

     public function setTotalPaginas($totalPaginas)
     {
          $this->totalPaginas = $totalPaginas;
     }

     public function setPaginaAtual($paginaAtual)
     {
          $this->paginaAtual = $paginaAtual;
     }

     public function setAberto($aberto)
     {
          $this->aberto = $aberto;
     }

     public function setLeitor($leitor)
     {
          $this->leitor = $leitor;
     }
}

 ?>
