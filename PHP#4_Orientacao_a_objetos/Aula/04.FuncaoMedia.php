<?php
function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4){
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    if ($media >= 6):
        echo "$nome foi aprovando com a média $media";
    else:
        echo "$nome foi reprovado!";
    endif;
}
echo "Digite o nome do Aluno:";
$nome = readline();
echo "Digite a nota1 do aluno: ";
$nota1 = readline();
echo "Digite a nota2 do aluno: ";
$nota2 = readline();
echo "Digite a nota3 do aluno: ";
$nota3 = readline();
echo "Digite a nota4 do aluno: ";
$nota4 = readline();


calcularMedia("Juliano",10,2,5,10);