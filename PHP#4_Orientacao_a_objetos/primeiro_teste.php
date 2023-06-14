<?php
require 'src/conta.php';
$conta = criarConta('123.456.789-10', 'Vinicius Dias', 500);
var_dump($conta); // Observe que a conta foi criada corretamente
$conta['123.456.789-10']['saldo'] -= 700;
var_dump($conta); // Verifique que uma nova conta foi criada de forma incorreta

$conta = criarConta('123.456.987-22','Juliano Silva',600);
var_dump($conta);

$conta = criarConta('123.456.789-33','Marcos Silva',5600);
var_dump($conta);
