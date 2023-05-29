<?php
function espaco(){
    echo PHP_EOL . "----------------------" . PHP_EOL;
}
function quebra(){
    echo PHP_EOL;
}

$email = "Juliano@fiemg.com.br";
$senha = "Juliano123";

echo strlen($senha). espaco();

if (strlen($senha) < 8){
    echo "Senha insegura". espaco();
}

$posicaoDoArroba = strpos($email,"@");
echo "nome: ". espaco();
echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
echo "dominio: ";
echo substr($email, $posicaoDoArroba + 1);
echo espaco();

echo "Substituindo o usuario".PHP_EOL;
$usuario = substr($email, 0, $posicaoDoArroba);
echo "Nome: ".$usuario.quebra();
echo espaco();

echo "Exibindo nome em caixa alta".quebra();
echo strtoupper($usuario).quebra();//mudando o Casse para UPPER CASE //Não muda a string //aqui, passagem de parametro por valro, estamos fazendo uma copia
$usuarioCaixaAlta = strtoupper($usuario); //assagem de parametro por referencia
echo espaco();
echo "Usuario com caixa alta, variavel: $usuarioCaixaAlta ".quebra();
echo espaco();

echo "tudo minúscula".quebra();
echo strtolower($email);
echo quebra();
echo "PEgando o nome com strpos, e colocando tudo em minusculo".PHP_EOL;
echo strtolower(substr($email, 0, $posicaoDoArroba));

echo "Observação: O padrão CASE só reconhece o ASC, se usar acentos, o case não reconhece e deixa como esta".quebra();
$nome ="Hércules";//String multibyte
echo "Comprimento do texto".quebra();
echo strlen($nome).quebra();

echo strtoupper($nome).quebra();//Retorna HéRCULES
//Então, como corrigir esse "erro"?
//Usando uma extenção (mbstring)
echo mb_strtoupper($nome).quebra();  
echo mb_strtolower($nome).quebra();

//Caso não dê certo, deverá verificar o arquivo PHP.INI
//extension_dir = "ext" - retirar o comentario
//extension=mbstring - retirar o comentario
echo espaco()."FIM";