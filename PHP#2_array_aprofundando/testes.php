<?php
$frutas = ['maçã', 'banana', 'laranja'];

$ultimaFruta = array_pop($frutas);

echo $ultimaFruta; // exibe: laranja
// echo implode(', ', $frutas); // exibe: maçã, banana