<?php

spl_autoload_register(
     function($clss_name)
     {
          $filename = "class".DIRECTORY_SEPARATOR."$clss_name.php";

          if (file_exists($filename))
          {
               require_once($filename);
          }
     }
)

 ?>
