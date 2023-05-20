<?php

/**SUBROTINA */
function tracos() //Subrotina não tem retorno
{
    echo "***************";
}
/**
 * Summary of exibeMensagem
 * @param mixed $mensagem
 * @return void
 */
function exibeMensagem($mensagem) //Subrotina não tem retorno
{
    /**Podemos ou não colocar uma parametro */
    echo $mensagem . PHP_EOL;
}

/**FUNÇÃO SACAR */
function sacar(array $conta2, float $valorASacar): array //Função tem retorno //se não especificar o tipo de dado,o programa aceita string, e irá gerar um erro.
//O mesmo erro acontece se tentarmos colocar string no lugar de $conta2
//Por isso vamos usar o array
//após o parametro, devemos colocar o tipo de dado que deve retornar 
{
    if ($valorASacar > $conta2["saldo"]) {
        exibeMensagem("Saldo insuficiente");
    } else {
        $conta2["saldo"] -= $valorASacar;
    }
    return $conta2;
}
/**FUNÇÃO DEPOSITAR */
function depositar(array $conta, float $valorADepositar):array
{
    if ($valorADepositar > 0) {
        $conta["saldo"] += $valorADepositar;
    } else {
        exibeMensagem("Somente valores positivos para deposito");
    }
    return $conta;
}

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
@$contasCorrentes[390245637812] = depositar(@$contasCorrentes[390245637812], 500);

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


/**Ate agora, temos um monte de Funções dentro de um unico arquivo.
 * É interessante separar tudo em arquivos diferentes.
 */
