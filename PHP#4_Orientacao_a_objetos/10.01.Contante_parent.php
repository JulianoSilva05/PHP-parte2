<?php
class Pessoa{
    const NOME = "Juliano";
    public function exibirNome(){
        echo self::NOME;
    }
}
class Professor extends Pessoa{
    const NOME = "Fernando";
    public function exibirNome(){
        // echo self::NOME; //Exibe o nome da propria classe
        //Retorna FERNANDO
        // echo parent::NOME; //Exibe o nome da classe pai
    }
}
$juliano = new Professor();
$juliano -> exibirNome();
