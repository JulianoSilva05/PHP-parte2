<?php
//arrays associativos, uma espécie de mapa na qual podemos associar um nome/índice a determinado valor. Esse índice pode ser numérico, como o PHP faz automaticamente, ou pode ser definido de outra forma - por exemplo, criando uma string titular ou saldo.
//Se não definir o indice, o php coloca o indice 0,1,2....
//Podemos dar nomes aos indices

$conta1 = [
    "titular" => "Juliano",
    "saldo" => 1000
];

$conta2 = [
    "titular" => "Marcos",
    "saldo" => 2000
];

$conta3 = [
    "titular" => "Maria",
    "saldo" => 3000
];

$contasCorrentes = [$conta1, $conta2, $conta3];
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]["titular"] . " - " . $contasCorrentes[$i]["saldo"] . PHP_EOL;
}

echo $conta2["titular"];