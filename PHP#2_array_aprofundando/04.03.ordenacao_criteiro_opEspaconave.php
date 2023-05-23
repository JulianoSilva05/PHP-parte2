<?php
echo "Hoje é dia " . date('d/m/y') . PHP_EOL;
echo " agora são " . date('h:i:sa') . PHP_EOL;

$notas = [
    [
        "aluno" => "Maria",
        "nota" => 9,
    ],
    [
        "aluno" => "Juliano",
        "nota" => 10,
    ],
    [
        "aluno" => "Marcos ",
        "nota" => 6,
    ],
];
function ordenaNotas(array $nota1, array $nota2): int
// {echo "Ordem Crescente";
//     return $nota1["nota"] <=> $nota2["nota"];
//     /**O operador de Espaçonave Se o primeiro elemento antes do operador for menor do que o elemento depois do operador ele retorna -1, se o primeiro elemento for maior ele retorna 1 e se eles forem iguais ele retorna 0. */
//     //Exibe as notas em ordem crescente

// }

{echo "Ordem Decrescente";
    return $nota2["nota"] <=> $nota1["nota"];

    /**O operador de Espaçonave Se o primeiro elemento antes do operador for menor do que o elemento depois do operador ele retorna -1, se o primeiro elemento for maior ele retorna 1 e se eles forem iguais ele retorna 0. */
    //Exibe as notas em ordem crescente
}

usort(array:$notas, callback:"ordenaNotas");//ordena do maior para o menor usando uma função de comparação
//posso passar uma função como parametro no PHP, por isso usamos o CALLBACK
var_dump($notas);
