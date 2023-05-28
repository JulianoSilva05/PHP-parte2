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

// Usando o arrya_merge
$alunos2023 = array_merge($aluno2022,$novosAlunos);
var_dump($alunos2023).PHP_EOL;


// Desenpacotando arrays - Criu um novo array e uso ... para desempacotar cada array
$alunos2023 = [...$aluno2022,"Juliano Silva",...$novosAlunos];//... = Array unpacking
//
var_dump($alunos2023).PHP_EOL;

funcao(...[1,2,'3.5']);//os 3 pontos funcionam para pegar cada valor individualmente. 

function funcao(int $a, int $b,int $c){
    echo gettype($a).PHP_EOL;
    echo gettype($b).PHP_EOL;
    echo gettype($c).PHP_EOL;
    echo $c.PHP_EOL;
}