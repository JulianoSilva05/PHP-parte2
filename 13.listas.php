<?php
$idadeList = [21, 23, 19, 25, 30, 41, 18];

$idadeJuliano = $idadeList[0];
$idadePaulo = $idadeList[1];
$idadeMarcos = $idadeList[2];

// Porém, gostaríamos de pegar esses três valores, nessas ordens, em uma única linha de código. Será que o PHP nos permite informar uma lista de variáveis que queremos receber uma lista de valores já existe? Na verdade sim, e o nome dessa funcionalidade é list() - uma função que recebe variáveis e faz com que os valores nos índices da lista sejam passados na mesma ordem:
// list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
list($idadeJuliano, $idadePaulo, $idadeMarcos) = $idadeList;

// Com isso, conseguiremos pegar os valores de dados cujas posições nós já conhecemos, tudo isso em uma única linha. Se quiséssemos pegar somente o primeiro e o terceiro valor, poderíamos passar um índice sem variável atribuída:


$idadeList[] = 20;

foreach($idadeList as $idade){
    
    echo $idade.PHP_EOL;
}
