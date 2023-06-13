<?php
//Declarando métodos
/**
 * Para declarar um método vamos utilizar a sintaxe de function, porem dentro de uma class;
 * O restante é exatamente igual a sintaxe de função;
 * Podemos retornar ou imprimir dados, dependendo da nossa regra de negócios;
 */
class Pessoa{
    function falar(){
        echo "Olá, eu sou um objeto! <br>".PHP_EOL;
    }

    function somar($x, $y){
        echo $x + $y.PHP_EOL;
    }
}

$juliano = new Pessoa;
$juliano -> falar();// símbolo "->" é conhecido como operador de acesso à propriedade. Ele é usado para acessar métodos e propriedades de um objeto em orientação a objetos.

$nathan = new Pessoa;
$nathan -> falar();
$nathan -> somar(2,3);

$joao = new Pessoa;
$joao -> somar(1,1);
