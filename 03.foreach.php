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

$contasCorrentes = [
    $conta1, 
    $conta2, 
    $conta3];
//Como não sabemos os indices (neste caso CPF) de todos os clientes, usar o FOREACH
foreach($contasCorrentes as $conta){
    echo $conta["titular"].PHP_EOL;

}
echo "----------------------------------------------".PHP_EOL;
/*

************************************************************
PARTE 2
************************************************************
*/
//podemos substituir as variaveis contas pelos seus respectivos valores
$contasCorrentes = [
    390245637812=>["titular" => "Juliano","saldo" => 1000],
    18564927812 => ["titular" => "Marcos","saldo" => 2000],
    52896346971 => ["titular" => "Maria","saldo" => 3000]
];
//adicionando mais uma conta
$contasCorrentes[56485247896] = [//se o indice for um cpf, devemos colocar o item, se for indices contando de 0,1,2,3... não precisa coloca no parametro  
    "titular" => "Carlos","saldo" => 5230
];

//mas e se eu quiser ter acesso ao indice?
//então, posso criar uma variavel para ter acesso ao indice!
foreach($contasCorrentes as $cpf => $conta){//as CHAVE, e para ininformar que $
    echo $cpf." - ".$conta["titular"]."\t".$conta["saldo"].PHP_EOL;
}