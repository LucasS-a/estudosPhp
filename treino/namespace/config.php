<?php

spl_autoload_register(
     function($nomeClass){

          $dirClass =  "class";
          // substitui a '\' pela barrra do SO, já que linux não utiliza essa barra.
          $nomeClass = str_replace("\\", DIRECTORY_SEPARATOR , $nomeClass);

          $filename = $dirClass . DIRECTORY_SEPARATOR . "$nomeClass.php";

          if (file_exists($filename))
          {
               require_once($filename);

          } else {

               $filename = "class/DB" . DIRECTORY_SEPARATOR . "$nomeClass.php";

               require_once($filename);

          }
     }
);

 ?>
