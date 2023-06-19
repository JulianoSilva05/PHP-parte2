<?php

/**Para ficar mais organizado, podemos requisitar funções de outros arquivos */
require_once "03.02.Conta.php"; /**No PHP, require_once é uma construção de linguagem que é usada para incluir e executar um arquivo específico em um script PHP. Ele é semelhante ao require, mas possui uma diferença importante: o require_once verifica se o arquivo já foi incluído anteriormente e, caso tenha sido, ele não será incluído novamente. */

$primeiraConta = new Conta();
echo "Saldo antes do deposito".$primeiraConta -> recuperarSaldo()."<br />";
$primeiraConta ->depositar(600);
echo "Saldo depois do deposito do deposito".$primeiraConta -> recuperarSaldo()."<br />";
$primeiraConta -> sacar(300); //Tenho acesso ao saldo, porem com condicional - Isso é BOM
// $primeiraConta -> recuperarSaldo() -=600; //dessa forma tenho acesso direto ao saldo, mesmo se não tiver saldo, vai sacar. - isso não é legal
$primeiraConta ->depositar(600);
echo "Saldo depois do saque".$primeiraConta -> recuperarSaldo()."<br />";


// $primeiraConta -> nomeTitular = "Juliano";//Porem, se eu tentar definir o CPF irá dar erro, pois o CPF está como private
//Para isso, criamos um metodo para definir o CPF

$primeiraConta -> defineCpfTitula("0123456789");
$primeiraConta ->defineNomeTitula("Juliano");
echo $primeiraConta -> nomeTitular; //irá dar erro, pois o nome está como private.

echo $primeiraConta -> recuperarNome()." -> ";
echo $primeiraConta -> recuperarCpfTitula();