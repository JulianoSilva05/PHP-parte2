<?php

$dados = [
    'nome' => 'Juliano', 
    'nota' => 10, 
    'idade' => 21
];

// ['nome' => $nome,'nota' => $nota,'idade' => $idade] = $dados;
echo"Usando extract para cirar variaveis com os indices".PHP_EOL;
extract($dados);//pega todo array e transforma em variavel 
//extract só pode ser usado em dados que você conhece e confia
var_dump($nome,$nota,$idade);

echo"Colocando nome como indice".PHP_EOL;//pega as variaveis e transforma em array
var_dump(compact('nome','nota','idade')); //para colocar no HTML é muito util.


/**Estudar mais sobre
 * array_map, array_filter e array_reduce
 */