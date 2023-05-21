<?php

// include "11_funcoes.php";
/**O include vai buscar funções em outro arquivo */
// se usarmos somente o "include" e der algum erro no arquivo  "11_funcoes.php" op programa vai continuar rodando. Para solucionar essa falha usamos o require "11_funcoes.php";
require "11_funcoes.php";
/*O php trabalha com niveis de erro*/
//E-WARNING - Não executa
//E_NOTICE - ENCONTRA O ERRO E CONSEGUE EXECUTAR
// E_ERROR - Verifica o erro 
//EXEMPLO:
echo $contasCorrentes[390245637812]["saldo"];


$contasCorrentes = [
    390245637812 => ["titular" => "Juliano", "saldo" => 1000],
    18564927812 => ["titular" => "Marcos", "saldo" => 2000],
    52896346971 => ["titular" => "Maria", "saldo" => 3000]
];

/** Sacar da conta do Juliano */
$contasCorrentes[390245637812] = sacar($contasCorrentes[390245637812], 500);
echo $contasCorrentes[390245637812]["titular"] . " - " . $contasCorrentes[390245637812]["saldo"];
exibeMensagem("");

/** Sacar da conta do Marcos */
$contasCorrentes[18564927812] = sacar($contasCorrentes[18564927812], 500);
echo $contasCorrentes[18564927812]["titular"] . " - " . $contasCorrentes[18564927812]["saldo"];
exibeMensagem("");

/** Sacar da conta do Maria */
$contasCorrentes[52896346971] = sacar($contasCorrentes[52896346971], 1500);
echo $contasCorrentes[52896346971]["titular"] . " - " . $contasCorrentes[52896346971]["saldo"];
exibeMensagem("");

/**DEPOSITAR */
$contasCorrentes[390245637812] = depositar(@$contasCorrentes[390245637812], 500);

exibeMensagem("");
exibeMensagem("*********************");
exibeMensagem(tracos());
foreach ($contasCorrentes as $cpf => $conta) { //as CHAVE, e para ininformar que $
    /*echo $cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"] . PHP_EOL;*/
    exibeMensagem(
        //$cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"]
        // "$cpf  $conta[titular]  $conta[saldo]"//Podemos colocar tudo dentro de um array dentro de uma string simples
        /*|Podemos usar a formatação de strings complexas. FIca assim: */
        "$cpf {$conta["titular"]} {$conta["saldo"]}"
        );
}

echo $contasCorrentes[390245637812]["titular"] . " - " . $contasCorrentes[390245637812]["saldo"];
/**
 * Repare, então, que as nossas funções estão recebendo uma conta, e devolvendo essa conta depois que a operação é realizada. E se quiséssemos modificar a conta que está sendo passada como parâmetro? Por exemplo, colocando o nome do titular todo em maiúsculo? Trabalharemos com isso na próxima aula.
 */