<?php
//Array é uma forma de agrupar dados em uma unica variavel
$id = [0,1,2,3,4,5,6];
//adicionar um id e idade
$id[] = 7;
$idadeList = [21, 23, 19, 25, 30, 41, 18];
//adicionando uma idade
$idadeList[] = 55;
$nomes = ["Juliano","Alan","Maria","João","Mario","Marcos","Gabriel"];
//adicionando um nome
$nomes[] = "Fernando";
for ($i=0; $i < count($id); $i++){
    echo $id[$i]. " \t".$nomes[$i]." \t ".$idadeList[$i].PHP_EOL;
}

/*
Nessa aula, aprendemos sobre a estrutura de dados Array. Vimos que um Array:

agrupa vários valores
também é chamado de vetor ou lista (isso depende da linguagem ou plataforma)
usa-se [] ou array() para declarar um novo array
acessa um elemento usamos os []
dentro dos [] vem a posição do elemento
possui um índice que por padrão começa com 0 (zero)
para acessar todos os elementos podemos usar uma estrutura de repetição
para saber quantos elementos um array tem existe a função count()
*/