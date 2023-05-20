<?php
/*Quando quiser isolar um bloco de codigo, devemos coloca-lo entre chaves */

/**Aqui, temos uma função adiciona2 que recebe um parâmetro que chamamos de $x e simplesmente adiciona 2 ao valor desse parâmetro.   */
//function adiciona2($x){
//    $x+2;
//}
/**Mas como faremos para conseguir o resultado dela?  */

//$sete = adiciona2(5);
//echo $sete;
// E se quisermos armazenar o resultado em outra variável? Para que nossa função possa representar um valor após executada, utilizamos a palavra reservada return:

function adiciona2($x){
    return $x+2;
}

$resultado = adiciona2(55);
    echo $resultado.PHP_EOL;

//exit(); //para a execução do codigo
function tracos(){
    echo "***************";
}
function exibeMensagem($mensagem) {/**Podemos ou não colocar uma parametro */
    echo $mensagem . PHP_EOL;
}



$contasCorrentes = [
    390245637812 => ["titular" => "Juliano", "saldo" => 1000],
    18564927812 => ["titular" => "Marcos", "saldo" => 2000],
    52896346971 => ["titular" => "Maria", "saldo" => 3000]
];

/** Sacar da conta do Juliano */
if(500 > $contasCorrentes[390245637812]["saldo"]){
    exibeMensagem("Saldo insuficiente");
}
else{
    $contasCorrentes[390245637812]["saldo"]-=500;
}

/** Sacar da conta do Marcos */
if(100 > $contasCorrentes[18564927812]["saldo"]){
    exibeMensagem("Saldo insuficiente");
}
else{
    $contasCorrentes[18564927812]["saldo"]-=100;
}

/** Sacar da conta do Maria */
if(350 > $contasCorrentes[52896346971]["saldo"]){
    exibeMensagem("Saldo insuficiente");
}
else{
    $contasCorrentes[52896346971]["saldo"]-=350;
}

foreach ($contasCorrentes as $cpf => $conta) { //as CHAVE, e para ininformar que $
    /*echo $cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"] . PHP_EOL;*/
    exibeMensagem($cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"]);
    exibeMensagem(tracos());
}

