<?php

$diasemana = array('1'=>'domingo', '2'=>'segunda', '3'=>'terça', '4'=>'quarta', '5'=>'quinta', '6'=>'sexta', '7'=>'sábado');

// Variável que recebe o dia da semana (1 = domingo, 2 = segunda, 3 = terca ...)

echo "dia da semana numero".PHP_EOL;


echo "Digite o dia da semana (0 = Domingo, 1 = Segunda....)";
$numero = readline();

switch ($diasemana[$numero]) {
    case "segunda":
        echo "Hoje é segunda-feira.";
        break;
    case "terça":
        echo "Hoje é terça-feira.";
        break;
    case "quarta":
        echo "Hoje é quarta-feira.";
        break;
    case "quinta":
        echo "Hoje é quinta-feira.";
        break;
    case "sexta":
        echo "Hoje é sexta-feira.";
        break;
    case "sábado":
        echo "Hoje é sábado.";
        break;
    case "domingo":
        echo "Hoje é domingo.";
        break;
    default:
        echo "Dia inválido.";
        break;
}
