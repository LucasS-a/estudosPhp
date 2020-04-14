<?php

spl_autoload_register(
     function($nameClass)
     {
          $nameDir = "class";

          $filename = $nameDir . DIRECTORY_SEPARATOR . "$nameClass.php";

          echo $filename . "<br>";

          if (file_exists($filename))
          {
               require_once($filename);

          }else {

               $nameDir = "interface";

               $filename = $nameDir . DIRECTORY_SEPARATOR . "$nameClass.php";

               echo $filename . "<br>";

               require_once($filename);
          }
     }
);

 ?>
