<?php
/**Uma tupla, em várias linguagens, principalmente em linguagens que tem mais uma pegada de programação funcional, nós temos uma estrutura de dados que não existe aqui no PHP, que é estrutura de Tuplas. Uma tupla é um pequeno conjunto de elementos onde a posição dele pode significar alguma coisa. */
//Array é um conjunto de dados do mesmo tipo
//tuplas ou listas são conjuntos de dados distintos
$dados = ['Juliano', 10, 21];
// $nome = $dados[0];
// $nota = $dados[1];
// $idade = $dados[2];

// echo "Meu nome é $nome e tenho $idade.\nMinha nota é $nota".PHP_EOL;

//no php podemos usar o list
list($nome,$nota,$idade) = $dados; //posso criar variaveis me baseando nas posições dos indices.
// ou
//[$nome,$nota,$idade] = $dados;
echo "Meu nome é $nome e tenho $idade.\nMinha nota é $nota".PHP_EOL;
var_dump($dados).PHP_EOL;
var_dump($nome,$nota,$idade);

echo"Posso usar nomes para os indices">PHP_EOL;
$dados = [
    'nome' => 'Juliano', 
    'nota' => 10, 
    'idade' => 21
];
['nome' => $nome,'nota' => $nota,'idade' => $idade] = $dados;
var_dump('nome = '.$nome,'nota = '.$nota,'idade = '.$idade);

echo "Com varios dados:".PHP_EOL;

$contas = [
    [
        'titular' => 'Juliano Silva',
        'saldo' => -100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais" . PHP_EOL;
}