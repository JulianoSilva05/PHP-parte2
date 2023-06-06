<?php
$vetor = array(1, 2, 3, 4);
foreach ($vetor as $v) {
    print "O valor atual do vetor é $v".PHP_EOL;
}
$a = [
    "um" => 1, 
    "dois" => 2, 
    "tres" => 3
    ];

foreach ($a as $chave => $valor) {
    print "\$a[$chave] => $valor".PHP_EOL;
}

$pessoa = [
    "123456789-10" => "Juliano",
    "234567891-11" => "Maria",
    "345678912-12" => "Pedro"
];

foreach($pessoa as $conta => $indice){
    echo "$conta => $indice".PHP_EOL;
}