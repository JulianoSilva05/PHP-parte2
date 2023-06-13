<?php
//Funções
//Função sem parametro e sem retorno.
function exibeOlaMundo(){
    echo "Olá mundo";
}
//Para evocar uma função
exibeOlaMundo();//como não tem parametro, só abrir e fechar parênteses

//Função com parametro e sem retorno.
function exibeMensagem(string $mensagem){
    echo "$mensagem";
}
$hoje = date('d/m/Y');
exibeMensagem("Olá Juliano. Hoje é $hoje".PHP_EOL);

//Função com parametro e com retorno.

function somarDoisNumeros(float $n1,float $n2){
    return $n1 + $n2.PHP_EOL;
}

$resultado = somarDoisNumeros("2.5",3);
echo "A soma é $resultado".PHP_EOL;//não vai dar certo pois  as variaveis estão definidas somente na função