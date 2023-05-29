<?php
function quebra(){
    echo PHP_EOL;
}
$nome = "Juliano Silva";
$email = "Juliano@fiemg.com.br";
$senha = "Juliano123";

echo mb_strlen($senha);

if (mb_strlen($senha) < 8){
    echo "Senha insegura". quebra();
}

$posicaoDoArroba = strpos($email,"@");
echo "nome: ". quebra();
echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
echo "dominio: ";
echo substr($email, $posicaoDoArroba + 1);
echo quebra();

echo "Substituindo o usuario".PHP_EOL;
$usuario = substr($email, 0, $posicaoDoArroba);
echo "Nome: ".$usuario.quebra();
echo quebra();

//MultBity String
echo mb_strtoupper($usuario).quebra();
echo substr($email, $posicaoDoArroba +1).quebra();

/**
 * Explode
 */
var_dump(explode(' ',$nome));
//Podemos colocar tudo em listas
list($nome, $sobrenome) = explode(' ',$nome);
echo "Nome: ".$nome.quebra();
echo "Sobrenome :".$sobrenome.quebra();

$csv = "Juliano,34,juliano@gmail.com";
var_dump(explode(',',$csv));

$csv2 = [
    "Juliano,34,juliano@gmail.com",
    "Marta,25,marta@gmail.com",
    "João,49,joao@gmail.com"
];
$result = [];
foreach ($csv2 as $row) {
    $result[] = explode(',', $row);
}

var_dump($result);