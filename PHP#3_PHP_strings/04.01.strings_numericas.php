<?php

function quebra()
{
    echo PHP_EOL;
    echo "***************************".PHP_EOL;
}

$anoNascimento = '1989'; //mesmo se tratando de String, o PHP realiza calculos
/**Qualquer string não numerica no PHP equivale a 0 */
$idade = 2023 - $anoNascimento;
echo quebra();
echo $idade;
echo quebra();

if ($anoNascimento == 0){ //== compara e não leva em consideração o tipo de dados. // === leva em consideração o tipo de dado
    echo "Nasceu em 89".quebra();
} else{
    echo "Não nasceu em 89 :(".quebra();
}
 quebra();