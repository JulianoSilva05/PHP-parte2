<?PHP
$numeros = [];

while ($i < 10){
    echo "Digite um numero: ";
    $numeros[$i] = readline();
    $i++;
}

// Filtrando apenas os números pares
$numerosPares = array_filter($numeros, function ($valor) {
    return $valor % 2 == 0;
});
var_dump($numerosPares);