<?php
//Checando ancestralizada
/**
 * Para chegar a ancestralidade de uma classe utilizamos o operador instanceof;
 * Podemos inserir essa operação em um if, pois vai retornar um booleano;
 * Exemplo:
 * $objeto instanceof Humano
 */

class Humano
{

}
class Animal
{

}

class Professor extends Humano
{

}

$marcos = new Humano;
$mini = new Animal;
$juliano = new Professor;

if ($marcos instanceof Humano) {
   echo "Marcos é um Humano";
}

if ($mini instanceof Humano) {
   echo "Mini é um Humano<br />";
} else {
   echo "Mini é um animal<br />";
}

if ($juliano instanceof Humano) {
   echo "Juliano é um Humano <br />";
}