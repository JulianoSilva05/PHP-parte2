<?php

$email = "juliano@fiemg.com.br";
$posicaoDoArroba = 7;

echo "nome: ";
echo substr($email,0,7).PHP_EOL;
echo "dominio: ";
echo substr($email,8).PHP_EOL;

echo "Usando variavel como parametro";
echo "nome: ";
echo substr($email,0,$posicaoDoArroba).PHP_EOL;
echo "dominio: ";
echo substr($email,$posicaoDoArroba+1).PHP_EOL;

echo PHP_EOL;
echo "Forma correta:";
echo PHP_EOL."----------------------".PHP_EOL;

$posicaoDoArroba = strpos($email,"@");//strpos - busca a posição de item
echo "Usando variavel como parametro".PHP_EOL;
echo "nome: ";
echo substr($email,0,$posicaoDoArroba).PHP_EOL;
echo "dominio: ";
echo substr($email,$posicaoDoArroba+1).PHP_EOL;