<?php

$nome = "Juliano Silva";
//Para verificar se o nome contem "Silva"
echo str_contains($nome,"Silva").".PHP_EOL";//irá exibir o numero 1 = Verdadeiro
//para esse tipo de analise, usamos o var_dump, que retorna o valor e tipo
var_dump(str_contains($nome,"Silva")).".PHP_EOL";
if (str_contains($nome,"Silva")){
    echo "É da familia Silva";
}
else{
    echo "Não é da familia".PHP_EOL;
}
