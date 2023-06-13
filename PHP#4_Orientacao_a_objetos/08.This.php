<?php
//Conhecendo o $this
/**
 * O $this se refere a instância atual do objeto;
 * Podemos assim alterar um valor de uma propriedade doi objeto com:
 * $this->propriedade = "x";
 * Tradução literal = este;
 * Podemos invocar um método do objeto com this támbem;
 */

 class Animal{
    public $nome;
    function escolherNome($nome){
        $this -> nome = $nome;
    }
    function latir(){
        echo "Au auuuuuuu!";
    }
    
    function latirForte(){
        return strtoupper($this->latir());
    }
}

 $cachorro = new Animal;

 echo "O nome do animal é $cachorro->nome".PHP_EOL;
$cachorro -> escolherNome("Toto");
echo "O nome do animal é $cachorro->nome".PHP_EOL;
$cachorro -> latir();
$cachorro -> latirForte();