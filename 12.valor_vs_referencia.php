<?php

require "11_funcoes.php";

$contasCorrentes = [
    390245637812 => ["titular" => "Juliano", "saldo" => 1000],
    18564927812 => ["titular" => "Marcos", "saldo" => 2000],
    52896346971 => ["titular" => "Maria", "saldo" => 3000]
];

//FUNÇÃO PARA COLOCAR LETRAS MAIUSCULAS
letrasMaiusculas($contasCorrentes[18564927812]);

foreach ($contasCorrentes as $cpf => $conta) { 
    exibeMensagem(
            "$cpf {$conta["titular"]} {$conta["saldo"]}"
        );
}

/**
 * Agora vamos imaginar que queremos pegar somente o primeiro item de uma lista qualquer, atribuindo uma variável a ele...ou pegar os três primeiros itens e atribuir variáveis a eles.
 *  Por exemplo, queremos pegar o titular e o saldo e atribui-los às variáveis $titular e $saldo. Será que o PHP nos fornece alguma facilidade a respeito disso?
 * Conversaremos sobre isso no próximo vídeo.
 */