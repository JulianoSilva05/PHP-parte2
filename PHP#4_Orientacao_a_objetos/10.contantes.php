<?php
//Constantes em classes
/**
 * As constantes são parecidas com variáveis, salvam valores em memória;
 * Porém o seu valor não pode ser alterado;
 * Exemplo de sintaxe:
 * public const CHAVE_API="ASO793mJJs39";//Declaramos constantes em MAIUSCULO.
 */
class Gato{
    public const OLHOS = 2;
    public const PATAS = 4;
    public const RABO = true;
    //para acessar uma constante em metodos a sintaxe muda
    function mostrarConstante(){
        echo "PATAS: ".self::PATAS.PHP_EOL;
        echo "OLHOS: ".self::OLHOS.PHP_EOL;
        echo "RABO: ".self::RABO.PHP_EOL;

    }

}


$mimi = new Gato;
echo $mimi::OLHOS.PHP_EOL; //sintaxe para acessar constantes é composta por ::
echo $mimi::PATAS.PHP_EOL;

$mimi->mostrarConstante();
