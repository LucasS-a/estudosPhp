<?php

$A = array();
$B = array();
$C = array();

for ($i = 0; $i < 10; $i++)
{
     $A[$i] = rand(0, 100);
     $B[$i] = rand(0, 100);
     $C[$i] = rand(0, 200);
     if ($A[$i] + $B[$i] > $C[$i])
     {
          echo 'A = ' . $A[$i] . '<br>';
          echo 'B = ' . $B[$i] . '<br>';
          echo 'A + B = ' . ($A[$i] + $B[$i]) . '<br>';
          echo 'C = ' . $C[$i] . '<br>'.'<br>';
     }
}

var_dump($A);
echo '<br>';
var_dump($B);
echo '<br>';
var_dump($C);


 ?>
