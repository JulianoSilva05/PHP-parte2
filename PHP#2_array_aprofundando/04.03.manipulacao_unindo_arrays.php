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

$alunos2023 = array_merge($aluno2022,$novosAlunos);
var_dump ($alunos2023).PHP_EOL;
//não preseva os indices numericos

/*Para chaves enumeradas vai retoirnar somente o ultimo valor e o primeiro deixa de exister*/
echo "*******************************************".PHP_EOL;
echo "Combinação com nomes para indices".PHP_EOL;
echo "*******************************************".PHP_EOL;
$aluno2022 = [
    'teste'=>'Juliano',
    'João'
];

$novosAlunos = [
    'teste'=>'Marcos',
    'Pedro',
    'Clara'
];
$alunos2023 = array_merge($aluno2022,$novosAlunos);
var_dump ($alunos2023).PHP_EOL;

//isso não ocorre quando temos indices numericos.
echo "*******************************************".PHP_EOL;
echo "Combinação com nmumeros para indices".PHP_EOL;
echo "*******************************************".PHP_EOL;
$aluno2022 = [
    0=>'Juliano',
    'João'
];

$novosAlunos = [
    0=>'Marcos',
    'Pedro',
    'Clara'
];
$alunos2023 = array_merge($aluno2022,$novosAlunos);
var_dump ($alunos2023).PHP_EOL;
//Vai sobrescrever o indice

//Usando o operador + //precisa ter indices definidos
echo "*******************************************".PHP_EOL;
echo "União com numeros para indices".PHP_EOL;
echo "*******************************************".PHP_EOL;
$aluno2022 = [
    0=>'Juliano',
    1=>'João'
];

$novosAlunos = [
    2=>'Marcos',
    3=>'Pedro',
    4=>'Clara'
];
$alunos2023 = $aluno2022 + $novosAlunos;
var_dump ($alunos2023).PHP_EOL;
