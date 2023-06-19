<?php

class Conta //nome de classe deve adjetivos
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0; 

    public function sacar(float $valorASacar): void //nome de classes devem ser verbos
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    public function recuperarSaldo():float{
        return $this -> saldo;
    }


    public function recuperarCpfTitula():string{
        return $this -> cpfTitular;
    } //Porem, se eu tentar definir o CPF irá dar erro, pois o CPF está como private

    public function defineCpfTitula($cpf) {
        $this -> cpfTitular = $cpf;
    }

    public function recuperarNome():string{
        return $this -> nomeTitular;
    }
    public function defineNomeTitula($nome) {
        $this -> nomeTitular = $nome;
    }
}
