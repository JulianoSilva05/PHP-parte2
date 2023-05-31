<?php

/**Expreções regulares
 * Conceito: Conjunto de caracteres ultilizando uma sintaxe predefinida que pode ser aplicado a um texto ou string
 */

$telefones = ["(24) 99999-9999", "(31) 99999 - 9999", "(31) 99988 - 8899", "(31) 8420 - 4877"];

foreach ($telefones as $telefone) {
    $regex = "/\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/";
    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $correspondencia
    ); //Essa função regular busca um padrão para escrever o código.

    if ($telefoneValido) {
        echo "Telefone válido" . PHP_EOL;
    } else {
        echo "Telefone Invalido" . PHP_EOL;
    }
    echo preg_replace(
        $regex,
        "(XX) \2",
        $telefone
    ) . PHP_EOL;
}
