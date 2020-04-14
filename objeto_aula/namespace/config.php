<?php

spl_autoload_register(
     function($nomeClass){

          $dirClass =  "class";
          // substitui a '\' pela barrra do SO, já que linux não utiliza essa barra.
          $nomeClass = str_replace("\\", DIRECTORY_SEPARATOR , $nomeClass);
          var_dump($nomeClass);

          $filename = $dirClass . DIRECTORY_SEPARATOR . "$nomeClass.php";

          if (file_exists($filename))
          {
               require_once($filename);
          }
     }
);

 ?>
