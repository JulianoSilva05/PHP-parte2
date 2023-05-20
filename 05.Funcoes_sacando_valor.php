<?php
$contasCorrentes = [
    390245637812 => ["titular" => "Juliano", "saldo" => 1000],
    18564927812 => ["titular" => "Marcos", "saldo" => 2000],
    52896346971 => ["titular" => "Maria", "saldo" => 3000]
];

$contasCorrentes[390245637812]["saldo"] = $contasCorrentes[390245637812]["saldo"] - 500;
/*
ou 
$contasCorrentes[390245637812]["saldo"]-=500;
*/

/** Sacar da conta do Juliano */
if(500 > $contasCorrentes[390245637812]["saldo"]){
    echo "Saldo insuficiente";
}
else{
    $contasCorrentes[390245637812]["saldo"]-=500;
}

/** Sacar da conta do Marcos */
if(100 > $contasCorrentes[18564927812]["saldo"]){
    echo "Saldo insuficiente";
}
else{
    $contasCorrentes[18564927812]["saldo"]-=100;
}

/** Sacar da conta do Maria */
if(350 > $contasCorrentes[52896346971]["saldo"]){
    echo "Saldo insuficiente";
}
else{
    $contasCorrentes[52896346971]["saldo"]-=350;
}

foreach ($contasCorrentes as $cpf => $conta) { //as CHAVE, e para ininformar que $
    echo $cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"] . PHP_EOL;
}
/*Criar a função no arquivo 06*/