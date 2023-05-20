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

exibeMensagem("este é o aqruivo de funçoes");