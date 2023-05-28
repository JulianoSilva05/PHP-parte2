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

sort($alunos2023);

foreach($alunos2023 as $alunosOrdem){
    echo $alunosOrdem."\n";
}