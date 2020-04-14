<?php

class ContaBanco
{
     public $numeroConta;
     protected $tipo;
     private $titular;
     private $saldo;
     private $status;

     /*-----------Métodos---------------*/

     public function abrirConta($tipo)
     {
          $this->setTipo($tipo);

          $this->setStatus(true);

          if ($tipo == "CC")
          {
               $this->setSaldo(50);

          } elseif ($tipo == "CP")
          {
               $this->setSaldo(150);
          }

     }
     public function fecharConta()
     {
          if ($this->getSaldo() > 0 )
          {
               echo "Conta com dinheiro, não posso fecha-la<br>";

          } elseif ($this->getSaldo() < 0)
          {
               echo "Conta em débito, impossivel encerrar<br>";

          } else
          {
               $this->setStatus(false);
          }
     }
     public function depositar($valor)
     {
          if ($this->getStatus())
          {
               $this->setSaldo($this->getSaldo() + $valor);

          } else {

               echo "Conta inexistente.<br>";

          }
     }
     public function sacar($valor)
     {
          /* Verifica se a conta esta ativa */
          if ($this->getStatus())
          {
               /* Verifica o tipo da conta */
               if ($this->tipo == "CC")
               {
                    $this->setSaldo($this->getSaldo() - $valor);

               } elseif ($this->getTipo() == "CP")
               {
                    /* Verifica se há saldo suficiente */
                    if($this->getSaldo() >= $valor)
                    {
                         $this->setSaldo($this->getSaldo() - $valor);
                    } else
                    {
                         echo "Saldo insuficiente<br>";
                    }
               }

          } else {

               echo "Conta inexistente.";

          }
     }
     public  function pagarMensalidade()
     {

          if ($this->getTipo() == "CC")
          {
               $valor = -18;

          }elseif ($this-> getTipo() == "CP")
          {
               $valor = 0.0005 * $this->getSaldo();
          }

          if ($this->getStatus())
          {
               $this->setSaldo($this->getSaldo() + $valor);
          }else
          {
               echo "Problemas com a conta. Não posso cobrar.<br>";
          }

     }
     /*-----------Métodos Mágicos---------------*/

     public function __construct()
     {
          $this->saldo = 0;
          $this->status = false;
     }
     public function __toString()
     {
          return json_encode(array(
               "Número da conta" => $this->getNumeroConta(),
               "Tipo"            => $this->getTipo(),
               "Titular"         => $this->getTitular(),
               "Saldo"           => $this->getSaldo(),
               "Status"          => $this->getStatus()
          ));

     }

     /*-----------GETS------------------*/

     public function getNumeroConta()
     {
          return $this->numeroConta;
     }

     public function getTipo()
     {
          return $this->tipo;
     }

     public function getTitular()
     {
          return $this->titular;
     }

     public function getSaldo()
     {
          return $this->saldo;
     }

     public function getStatus()
     {
          return $this->status;
     }

     /*-----------SETS------------------*/

     public function setNumeroConta($numeroConta)
     {
          $this->numeroConta = $numeroConta;
     }

     public function setTipo($tipo)
     {
          $this->tipo = $tipo;
     }

     public function setTitular($titular)
     {
          $this->titular = $titular;
     }

     public function setSaldo($saldo)
     {
          $this->saldo = $saldo;
     }

     public function setStatus($status)
     {
          $this->status = $status;
     }

}

 ?>
