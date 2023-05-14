<?php
//Array é uma forma de agrupar dados em uma unica variavel
$id = [0,1,2,3,4,5,6];
$idadeList = [21, 23, 19, 25, 30, 41, 18];
$nomes = ["Juliano","Alan","Maria","João","Mario","Marcos","Gabriel"];

for ($i=0; $i < count($id); $i++){
    echo $id[$i]. " \t".$nomes[$i]." \t ".$idadeList[$i].PHP_EOL;
}
