<?PHP
$numeros = array(1, 2, 3, 4, 5);
// Multiplicando cada número por 2
$numerosMultiplicados = array_map(function ($valor) {
    return $valor * 2;
}, $numeros);
// O array resultante será: array(2, 4, 6, 8, 10)
foreach($numeros as $numero ){
    var_dump ($numerosMultiplicados);
}