<?php

$array = [
    'chave1' => 'valor 1',
    'chave2' => 2,
    'chave3' => null,
];
echo (array_key_exists('chave3', $array)).PHP_EOL;


/**Strings numericas */
echo "Scrings numericas".PHP_EOL;
$teste = 123;
var_dump($teste);

echo "Scrings numericas, conversão".PHP_EOL;
$teste = '123a'; //Se eu colocar somente numeros dentro da string, o php consegue converter 
var_dump($teste);
var_dump((int)$teste);//convertendo string numerica para INT


/**Função para converter string em numero Int ou float */
echo "Função - Converte numero".PHP_EOL;
function exibeNumero(int | float $numero): void{
    var_dump($numero);
}
$teste = '123';
exibeNumero($teste);