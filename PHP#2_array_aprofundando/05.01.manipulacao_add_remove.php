<?php

$aluno2022 = [
    'Juliano',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosAlunos = [
    'Marcos',
    'Pedro',
    'Clara',
    'Renata',
    'Fernanda'
];


// Desenpacotando arrays - Criu um novo array e uso ... para desempacotar cada array
$alunos2023 = [...$aluno2022, "Juliano Silva", ...$novosAlunos]; //... = Array unpacking
array_push($alunos2023,'Marco','Tulio','Frozen'); //usado para incluir uma lista de aluno
var_dump($alunos2023) . PHP_EOL;
//se quiser incluri somente 1 aluno:
echo "Colocar um elemento no final".PHP_EOL;
$alunos2023[] = 'Karina';//adiciona na ultima posição
var_dump($alunos2023) . PHP_EOL;

echo "Colocar um elemento no inicio".PHP_EOL;
array_unshift($alunos2023,'Joseph','Robson');
var_dump($alunos2023) . PHP_EOL;

echo "Pega um elemento no final".PHP_EOL;
echo array_pop($alunos2023);//remove o ultimo elemento e retorna o restante

var_dump($alunos2023) . PHP_EOL;
