<?php
$array = '1 2 3 4';
var_dump(explode(' ',$array, 2));//o limit = 2 separa o $array em dois, separando o primeiro indice e separando dos demais


echo PHP_EOL."E se eu quiser separar todos?".PHP_EOL;
var_dump(explode(' ',$array, strlen($array)));