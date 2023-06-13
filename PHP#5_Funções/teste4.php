<?php
function soma_valores ($valor1 , $valor2 , $valor3)
{
$soma = $valor1 + $valor2 + $valor3;
echo "A soma dos valores $valor1, $valor2 e $valor3 ";
echo "é $soma";
}
echo "Digite o primeiro valor: " ;
$n1 = readline();
echo "Digite o segundo valor: " ;
$n2 = readline();
echo "Digite o terceiro valor: " ;
$n3 = readline();
soma_valores ($n1, $n2, $n3);