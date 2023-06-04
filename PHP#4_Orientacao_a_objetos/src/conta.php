<?php
//esse arquivo servirá como uma forma de bolo = Class - Isso será um padrão para criação de contas
class Conta
{
    //definir dados da cconta
    //Precisamos abstrrai o que precisamos para nosso sistema
    public string $cpfTitular; //estas variaveis são atributos de conta
    public string $nomeTitular;
    public float $saldo = 0;

    //Sacar
    public function sacar(float $ValorASacar)
    {
        if ($ValorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $ValorASacar;
    }

    //Depositar
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }
    //Transferir
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
    }
}
