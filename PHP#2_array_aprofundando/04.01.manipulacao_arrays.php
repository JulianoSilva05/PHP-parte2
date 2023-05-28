<?php

$notasBimestre1 = [
    'Juliano' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Maria' => 10
];
echo "array_diff".PHP_EOL;
//array_diff Leva em consideração os valores (Keys e Values) que estão diferentes em outros arrays
var_dump(array_diff($notasBimestre1,$notasBimestre2)).PHP_EOL;

echo "array_diff_key".PHP_EOL;
//array_diff_key Leva em consideração os valores das chaves
var_dump(array_diff_key($notasBimestre1,$notasBimestre2));


//Verificar quais notas mudaram
echo "array_diff_assoc".PHP_EOL;
var_dump(array_diff_assoc($notasBimestre1,$notasBimestre2));

//Na documentação encontramos diversas variações do ARRAY_DIFF
