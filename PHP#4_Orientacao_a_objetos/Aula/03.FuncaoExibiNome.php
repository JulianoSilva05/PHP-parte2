<?php
//criando Funções
function exibirNome(){
    echo "Meu nome é Juliano";
}

exibirNome();

//Passando parametro
function exibirNomeParametro($nome){
    echo "Meu nome é $nome";
}
echo "Digite seu nome: ";
$nome = readline();
exibirNomeParametro($nome);