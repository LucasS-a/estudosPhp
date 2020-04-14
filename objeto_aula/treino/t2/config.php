<?php

spl_autoload_register(
     function($nameClass)
     {
          $nameDir = "class";

          $filename = $nameDir . DIRECTORY_SEPARATOR . "$nameClass.php";

          if(file_exists($filename))
          {
               require_once($filename);
          }

     }
);

 ?>
