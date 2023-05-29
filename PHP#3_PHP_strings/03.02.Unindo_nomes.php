<?php
function quebra(){
    echo PHP_EOL;
}

$csv = "Juliano,34,juliano@gmail.com";
var_dump(explode(',',$csv));

/**Explode com listas */
$csv2 = [
    "Juliano,34,juliano@gmail.com",
    "Marta,25,marta@gmail.com",
    "João,49,joao@gmail.com"
];

$result = [];
foreach ($csv2 as $row) {
    $result[] = explode(',', $row);
}

var_dump($result);

echo quebra().quebra();
foreach ($result as $row) {
    echo implode(PHP_EOL, $row) . PHP_EOL;
    echo quebra();
}
echo quebra()."***********************".quebra();
/**implode com array */
$telefones = ['(31)98420-4877', '(21)99999-2332','(11)97324-7654'];
echo implode(PHP_EOL,$telefones).PHP_EOL;
