<?php
//Array é uma forma de agrupar dados em uma unica variavel
$idadeList = [21, 23, 19, 25, 30, 41, 18];
$nomes = ["Juliano","Alan","Maria","João","Mario","Marcos","Gabriel"];

for ($i=1; $i<=6; $i++){
    echo $nomes[$i]." - ".$idadeList[$i].PHP_EOL;
}
