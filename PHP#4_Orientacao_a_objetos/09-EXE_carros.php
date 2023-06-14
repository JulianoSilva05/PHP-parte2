<?php
/**
 * Crie uma classe Carro;
 * Crie algumas propriedades e também a propriedade velocidade_maxima;
 * Crie o método setVelocidadeMaxima, onde é possivel alterar a velocidade máxima do carro;
 * e também o getvelocidadeMaxima onde é possivel imprimir a velociade do carro;
 */
 class Carro{
    //propriedades
     public $cor;
     public $tetoSolar;
    public $velocidadeMaxima;
    
    //metodos
    function setVelocidadeMaxima($vel){
        $this-> velocidadeMaxima = $vel;
    }
    function getVelocidadeMaxima(){
        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br />";
    }
 }
 
$bmw = new Carro;
$bmw -> tetoSolar = true;

$bmw->setVelocidadeMaxima(300);
$bmw->getVelocidadeMaxima();


$ferrari = new Carro;
$ferrari -> tetoSolar = false;
$ferrari->velocidadeMaxima = 200;
$ferrari->setVelocidadeMaxima(150);
$ferrari->getVelocidadeMaxima();
