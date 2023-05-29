<?php
function quebra()
{
    echo PHP_EOL;
}
$nome = strtoupper("Juliano Silva");
$email = " Juliano@fiemg.com.br";
$senha ="  Juliano123";

echo $nome.quebra();
echo quebra().mb_strlen($senha);

if (mb_strlen($senha) < 8) {
    echo "Senha insegura" . quebra();
}

$emailCorreto = strtolower($email);
echo quebra() . $emailCorreto . quebra();

$emailCorreto = trim($emailCorreto); //trim() apara espaços
echo quebra() . $emailCorreto . quebra();
/**Posso remover caracteres especificos colocando no parametro */

$cvs = '.Juliano, 33, juliano@gmail.com,@,#';
echo quebra()."***********stroupper************".quebra();
echo strtoupper(trim($cvs, '.,@#')).quebra(); //só apara das pontas
echo quebra()."***********strtolower************".quebra();
echo quebra()."***********strtolower************".quebra();
echo strtolower(trim($cvs, '.,@#')).quebra(); //só apara das pontas
echo quebra()."***********strtolower************".quebra();
echo ltrim($cvs, '.,@#').quebra(); //só apara na esquerda
echo rtrim($cvs, '.,@#').quebra(); //só apara na direita
