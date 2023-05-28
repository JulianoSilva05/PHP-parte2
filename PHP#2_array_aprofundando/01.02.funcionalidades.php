<?php

$array = [//array, armazena dados do mesmo tipo
    //lista, armazena tipos de dados diferentes
    1 => "um",
    2 => "dois",
    3 => "tres"
];

for ($i = 1; $i <= count($array); $i++) {
    echo $array[$i] . PHP_EOL;
}
// }
//ou usando foreache

foreach($array as $numeral => $nomeNumero){
    echo "$numeral em português é: $nomeNumero".PHP_EOL;
}
echo "Total: ".count($array).PHP_EOL;

/**php.net/manual/en/language.types.integer.php#language.types.integer.casting */