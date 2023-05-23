<?php
echo "Hoje é dia " . date('d/m/y') . PHP_EOL;
echo " agora são " . date('h:i:sa') . PHP_EOL;

$notas = [
    [
        "aluno" => "Maria",
        "nota" => 9,
    ],
    [
        "aluno" => "Juliano",
        "nota" => 10,
    ],
    [
        "aluno" => "Marcos ",
        "nota" => 6,
    ],
];
function ordenaNotas(array $nota1, array $nota2):int{
    if ($nota1["nota"] > $nota2["nota"]){
        return -1;
    }
    if ($nota2["nota"] > $nota1["nota"]){
        return 1;
    }
        return 0;
};
usort(array:$notas, callback:"ordenaNotas");//ordena do maior para o menor
//posso passar uma função como parametro no PHP, por isso usamos o CALLBACK
var_dump($notas);
