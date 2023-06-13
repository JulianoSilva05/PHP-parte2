<?php
//Declarando Propriedades
/**
 * Para declarar propriedades vamos basicamente criar uma variável dentro de uma class;
 * Porém precisamos definir a sua Privacidade, por exemplo public;
 * Uma propriedade pública pode ser acessada fora do escopo do objeto;
 * Exemplo;
 * public $idade = 29;
 */
 class Carro{
    public $rodas = 4; //isso é uma propriedade
    public $aro = 20; //isso é uma propriedade
    public $cor = "Vermelha"; //isso é uma propriedade

    function ligar(){
        echo "O carro está ligado";
    }

 }
 $ferrari = new Carro;
 echo $ferrari -> aro = "25";
 echo $ferrari -> rodas.PHP_EOL;
 echo $ferrari -> cor = "Azul".PHP_EOL;
 echo $ferrari -> ligar();