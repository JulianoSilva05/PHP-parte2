<?php

$original = [10,8,9,7,6];
$notas = $original;
$notas_nome = [
    'Juliano' => 10,
    'Maria' => 8,
    'João' => 9
];

sort($notas);//ordena do menor  para o maior
rsort($notas);//ordena do maior para o menor

echo "NOTAS".PHP_EOL.var_dump($notas);//logo, a função sort altera o indice do array
echo "ORIGINAL".PHP_EOL.var_dump($original);

//O que acontece que ordenar com indeces nomeados?
// echo "Notas nomes - indice".PHP_EOL;
// rsort(array:$notas_nome);
// var_dump($notas_nome);

//E se eu não quiser alterar os indices?
echo "Notas nomes mantendo indice".PHP_EOL;
arsort(array:$notas_nome);
var_dump($notas_nome);

//e se eu quiser ordenar pela chave?
echo "Notas nomes ordem alfabetica".PHP_EOL;
ksort(array:$notas_nome);
var_dump($notas_nome);

//ordenar de forma descrescete pela chave
echo "Exibindo o for ".PHP_EOL;
echo "Notas nomes ordem descrescente alfabetica".PHP_EOL;
krsort(array:$notas_nome);
var_dump($notas_nome);

