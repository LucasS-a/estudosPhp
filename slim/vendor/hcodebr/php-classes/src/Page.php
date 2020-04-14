<?php

namespace Hcode;

use Rain\Tpl;

/**
 *
 */
class Page
{
     private $tpl;
     private $optiions = [];
     private $defauts = [
          "data" => []
     ];

     public function __construct($opts = array())
     {
          // mescla os arrays dando preferência ao $opts.
            $this->options = array_merge($this->defauts, $opts);

            // config
           $config = array(
              "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/",
              "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
              "debug"         => true // set to false to improve the speed
            );

           Tpl::configure( $config );

            // Cria o objeto tpl
            $this->tpl = new Tpl;

            $this->setData($this->options["data"]);

            $this->tpl->draw("header");
     }
     // Função que seta os dados no objeto tpl.
     // virou método pq 2 outros métodos teveram necessidade do mesmo
     private function setData($data = array())
     {
          foreach ($data as $key => $value)
          {
               $this->tpl->assign($key, $value);
          }
     }
     public function setTpl($name, $data = array(), $returnHTML = true)
     {
          $this->setData($data);

          return $this->tpl->draw($name, $returnHTML);
     }
     public function __destruct()
     {
         // onde fica o roda-pé, etc.
         // o "footer" é um html.
         // e tem o método próprio para trabalhar com ele.
         $this->tpl->draw("footer");
    }

}

 ?>
