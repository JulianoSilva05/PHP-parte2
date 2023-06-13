<?php

$a1 = [2,2,3,4];

$resultado = 1;
foreach ($a1 as $num){
    $resultado = $resultado * $num;//num = 2  res = 2 // num = 2  res = 4 // num = 3  res = 12 // num = 4  res = 48
}
echo $resultado;