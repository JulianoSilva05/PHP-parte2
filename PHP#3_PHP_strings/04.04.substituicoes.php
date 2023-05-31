<?php

$texto = "Texto com qualquer coisa poxa e caramba sua vagabunda!";
$texto2 = "Sua vagabunda";
echo str_replace(//o que, pelo que, onde
    ["poxa","caramba","lixo","puta","vagabunda"],
    "***",
    $texto
);
echo PHP_EOL;
echo str_replace(
    ["vagabunda", "mal amada", "puta", "filah da puta"],
    "Amada",
    $texto2
);
echo PHP_EOL;
echo strtr($texto,"vagabunda","*@**@3&");//substitui caracteres
echo PHP_EOL;
//segunda variação
echo strtr($texto,["poxa" => "p", "caramba"=> "c","vagabunda" => "vagaba"]);//[o que eu quero mudar // para que]
