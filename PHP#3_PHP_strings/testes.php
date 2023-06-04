<?php
$array1 = [1, 2];
$array2 = [3, 4];

$combinado = [...$array1, ...$array2];
print_r($combinado);
// Saída: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
