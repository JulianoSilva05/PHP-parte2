<?php

$notas = [
    'Juliano' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];
//Se eu quiser fazer um FOR para percorrer essa estrutura, não há como, pois não há indices
//logo devo verificar se é array

krsort(array:$notas);
var_dump($notas);
/**VErificar se é array */
echo "Verifica se é array".PHP_EOL;
echo gettype($notas).PHP_EOL;
//Ou crio uma verificação com if
if (gettype($notas) === 'array'){
    echo "Sim, é array!".PHP_EOL;
};
echo "Verifica se é array com IS_ARRAY".PHP_EOL;
/* Porem, há uma função em PHP que verifica se é array*/
echo (is_array($notas)).PHP_EOL;//1 para verdadeiro e 0 para falso

//Ou crio uma verificação com if e is_array
if (is_array($notas)){
    echo "Sim, é array!".PHP_EOL;
};

/**Se eu quiser verificar se um array é do tipo lista */
echo "ARRAY_IS_LIST - Retorna verdadeiro se todas as chaves são listas ".PHP_EOL;
/**Essa função recebe um array por parâmetro e retorna verdadeiro se esse array for em numérico, ou seja, todas as suas chaves são números, ele começa com o zero e a partir do zero são todas crescentes. Ou seja, ele não pula uma chave, por exemplo. */
var_dump(array_is_list($notas)).PHP_EOL;//vai retornar falso
//Logo não posso usar o FOR
/*
Mas se eu mudar os indices para numeros?
*/
$notas = [ 6,
    8,
    10,
    7,
    9,
    8
];
var_dump(array_is_list($notas));//vai retornar falso
//Agora posso usar o FOR
for ($i=0; $i<count($notas);$i++){
    echo "Posição $i = $notas[$i]".PHP_EOL;
}

/**Essa função é bastante útil quando precisarmos ter manipulações mais complexas. Repare que aqui nesse primeiro vídeo vimos verificações que podemos fazer para entender a estrutura de um array. Primeiro, se é um array, se determinada variável é realmente um array e se for estamos vendo se as chave são numéricas começando com 0 e indo crescente, ou seja, se uma é lista como estamos habituados a vermos em outras linguagens. */