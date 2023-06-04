<?php
//esse arquivo servirá como uma forma de bolo = Class - Isso será um padrão para criação de contas
class Conta
{
    //definir dados da cconta
    //Precisamos abstrrai o que precisamos para nosso sistema
    public string $cpfTitular; //estas variaveis são atributos de conta
    public string $nomeTitular;
    public float $saldo;
}