<?php
/**
 * Crie uma class Humano com algumas propriedades e o método falar;
 * Crie uma outra classe Professor, que herda de humano, crie também as propriedades e métodos particulares desta classe;
 * Exiba os valores das propriedades da classe pai e também utilize os métodos
 */
class Humano{
    public $olhos = 2;
    public $pernas = 2;

    public function falar(){
        echo "Olá, eu sou um humano<br>";

    }
}

class Professor extends Humano{
    public string $disciplina = "Programação de Aplicativos";
    public function estaLecionando(){
        echo "O professor está dando aula de $this->disciplina";
    }

}

$marcos = new Humano;
echo $marcos -> olhos."<br>";
$marcos->falar()."<br>";

$juliano = new Professor;
$juliano-> estaLecionando()."<br>";


