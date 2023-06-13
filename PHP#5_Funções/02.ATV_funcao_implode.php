<?php
/**
 * Crie um array com strings;
 * Utilize a função implode no array
 * Primeiro argumento:","
 * Segundo argumento: o seu array
 * Atribua a invocação da função a uma variável
 * Exiba o resultado
 */

 $array = ["Juliano","Marcio","Julia","Fernando"];
 $nomes = implode(", ",$array); //A função implode tem o poder de juntar os elementos de um array em uma unica variavel
 echo $nomes;

