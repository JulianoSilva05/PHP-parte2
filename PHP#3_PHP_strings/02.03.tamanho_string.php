<?php

$email = "juliano@fiemg.com.br";
$posicaoDoArroba = strpos($email, "@"); //strpos - busca a posição de item
$senha = "123";
echo $senha[0] . PHP_EOL; //podemos tratar uma variavel como array, mas não é array
/*porque não vai comportar como array, seu eu tentar colocar um foreach vai dar erro*/
echo PHP_EOL . "----------------------" . PHP_EOL;
echo "Usando o FOREACH" . PHP_EOL;
foreach ($senha as $char) {
    echo $char . PHP_EOL;
}
echo PHP_EOL . "----------------------" . PHP_EOL;
echo "Mas posso usar o FOR, porem não é produtivo inserir o numero de posições" . PHP_EOL;
for ($i=0; $i < 3; $i++){
    echo $senha[$i].PHP_EOL;
}

echo PHP_EOL . "----------------------" . PHP_EOL;
echo "Usando a função strlen() para contar a quantidade de posições" . PHP_EOL;
echo strlen($senha).PHP_EOL;
for ($i=0; $i < strlen($senha); $i++){
    echo $senha[$i].PHP_EOL;
}

echo PHP_EOL . "----------------------" . PHP_EOL;
echo "Usando variavel como parametro" . PHP_EOL;
echo "nome: ";
echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
echo "dominio: ";
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
