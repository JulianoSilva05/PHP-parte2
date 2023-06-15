<?php
class Conta{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar){
        if($valorASacar > $this -> saldo){
            echo "Saldo indisponivel";
        } else{
            $this -> saldo -= $valorASacar;
        }
    }
}
$juliano = new Conta;
$juliano -> saldo = 500;
echo"Antes do saque $juliano->saldo".PHP_EOL;
$juliano -> sacar(100);
echo"Depois do saque $juliano->saldo";