<?php
//arrays associativos, uma espécie de mapa na qual podemos associar um nome/índice a determinado valor. Esse índice pode ser numérico, como o PHP faz automaticamente, ou pode ser definido de outra forma - por exemplo, criando uma string titular ou saldo.
//Se não definir o indice, o php coloca o indice 0,1,2....
//Podemos dar nomes aos indices
$contasCorrentes = [
    390245637812 => [
        "titular" => "Juliano",
        "saldo" => 1000
    ],
    18564927812 => [
        "titular" => "Marcos",
        "saldo" => 2000
    ],
    52896346971 => [
        "titular" => "Maria",
        "saldo" => 3000
    ]
];
//adicionando mais uma conta
$contasCorrentes[56485247896] = [//se o indice for um cpf, devemos colocar o item, se for indices contando de 0,1,2,3... não precisa coloca no parametro  
    "titular" => "Carlos",
    "saldo" => 5230
];


foreach($contasCorrentes as $cpf => $conta){
    echo $cpf." - ".$conta["titular"]."\t".$conta["saldo"].PHP_EOL;
}