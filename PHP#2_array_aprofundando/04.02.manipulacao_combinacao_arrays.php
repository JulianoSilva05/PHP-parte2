<?php

$notasBimestre1 = [
    'Juliano' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7

];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

/*E se eu quiser pegar somente as chaves dos alunos faltantes*/
echo "Chaves dos alunos faltantes";
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes)).PHP_EOL;


/*E se eu quiser pegar somente os valores dos alunos faltantes*/
echo "valores dos alunos faltantes";
var_dump(array_values($alunosFaltantes)).PHP_EOL;

/**Posso pegar os valores dos alunos faltantes */
$alunosFaltantes=array_diff_key($notasBimestre1,$notasBimestre2);

/*Posso combinar arays*/
echo "*******************************************".PHP_EOL;
echo "Combinação de array - Nota como cheve, e nome como valor".PHP_EOL;
echo "*******************************************".PHP_EOL;
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
//Função que combina = array_combine($notasAlunos, $nomesAlunos)
var_dump(array_combine($notasAlunos, $nomesAlunos));




//Exemplo
echo "*******************************************".PHP_EOL;
echo "Combinação de array".PHP_EOL;
echo "*******************************************".PHP_EOL;

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
