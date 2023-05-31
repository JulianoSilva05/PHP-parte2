<?php

/**Expreções regulares
 * Conceito: Conjunto de caracteres ultilizando uma sintaxe predefinida que pode ser aplicado a um texto ou string
 */

$telefones = ["(24) 99999-9999", "(31) 99999 - 9999", "(31) 99988 - 8899", "(31) 8420 - 4877"];
foreach ($telefones as $telefone) {
    $telefoneValido = preg_match(
        "/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/",
        $telefone,
        $verificacoes
    ); //Essa função regular busca um padrão para escrever o código.

    var_dump($verificacoes);
    if ($telefoneValido) {
        echo "Telefone válido" . PHP_EOL;
    } else {
        echo "Telefone Invalido" . PHP_EOL;
    }
}
