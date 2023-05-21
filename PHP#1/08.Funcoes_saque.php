<?php

/**SUBROTINA */
function tracos()//Subrotina não tem retorno
{
    echo "***************";
}
function exibeMensagem($mensagem)//Subrotina não tem retorno
{
    /**Podemos ou não colocar uma parametro */
    echo $mensagem . PHP_EOL;
}

/**FUNÇÃO SACAR */
function sacar($conta2, $valorASacar)//Função tem retorno
{
    if ($valorASacar > $conta2["saldo"]) {
        exibeMensagem("Saldo insuficiente");
    } else {
        $conta2["saldo"] -= $valorASacar;
    }
    return $conta2;
    
}


$contasCorrentes = [
    390245637812 => ["titular" => "Juliano", "saldo" => 1000],
    18564927812 => ["titular" => "Marcos", "saldo" => 2000],
    52896346971 => ["titular" => "Maria", "saldo" => 3000]
];

/** Sacar da conta do Juliano */
$contasCorrentes[390245637812] = sacar($contasCorrentes[390245637812], 500);
    echo $contasCorrentes[390245637812]["titular"]." - ".$contasCorrentes[390245637812]["saldo"];
    echo PHP_EOL;

/** Sacar da conta do Marcos */
$contasCorrentes[18564927812] = sacar($contasCorrentes[18564927812], 500);
    echo $contasCorrentes[18564927812]["titular"]." - ".$contasCorrentes[18564927812]["saldo"];
    echo PHP_EOL;

/** Sacar da conta do Maria */
$contasCorrentes[52896346971] = sacar($contasCorrentes[52896346971], 1500);
    echo $contasCorrentes[52896346971]["titular"]." - ".$contasCorrentes[52896346971]["saldo"];
    echo PHP_EOL;


exibeMensagem(tracos());
foreach ($contasCorrentes as $cpf => $conta) { //as CHAVE, e para ininformar que $
    /*echo $cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"] . PHP_EOL;*/
    exibeMensagem($cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"]);

}
