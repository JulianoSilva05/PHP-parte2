<?php
echo "Hoje é dia " . date('d/m/y').PHP_EOL;
echo " agora são " . date('h:i:sa').PHP_EOL;

$notas = [
    10,
    8,
    9,
    7
]; //Se for numeros inteiros, o Sort irá ordenar por ordem crescente


$numeros = [
    "dez",
    "oito",
    "nove",
    "sete"
];

$notasOrdenadas = $notas;
$numerosOrdenados = $numeros;
sort(array: $notasOrdenadas); //A função sort muda a ordem, por isso é interessante cria uma variavel para receber o valor antes de alterar
sort(array: $numerosOrdenados);
echo "Notas desordenadas".PHP_EOL;
var_dump($notas).PHP_EOL;/**Visualiza os tipos de dados e sua estrutura */
var_dump($numeros).PHP_EOL;
echo "Notas ordenadas".PHP_EOL;
var_dump($notasOrdenadas).PHP_EOL;
var_dump($numerosOrdenados).PHP_EOL;

/**Como eu posso ensinar o PHP a trabalhar como uma ordenação? Como que eu passo critérios para ele? Vamos falar sobre isso no próximo vídeo.. */