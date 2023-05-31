<?php
function quebra()
{
    echo PHP_EOL;
    echo "***************************" . PHP_EOL;
}
function geraEmail(string $nome, $motivo,$assinatura): void
{   //heredoc equivalente a aspas duplas ("")
    $conteudoEmail = <<<FIM
     Olá, $nome!

    O motivo do contato é
    $motivo

    $assinatura
    FIM;
    echo $conteudoEmail . quebra();
}

geraEmail('Juliano Silva','Aviso de combrança', 'Banco BMG');
quebra();

function filmePreferidos(string $filme1, $filme2,$filme3): void
{   //nowdoc equivalente a aspas simples ('')//As variaveis são ignoradas!
    $Filmes= <<<'FIM'
        Meus filmes prediletos:
    $filme1
    $filme2
    $filme3
    FIM;
    echo $Filmes . quebra();
}

filmePreferidos('Senhor dos Aneis','Iron Man', 'Harry Potter');
quebra();


/**Outra forma de escrever strings é usando  */
//funciona como delimitador, todo conteudo dentro da string até digitar FINAL //Não pode ter espaços
$string = <<<FINAL
Uma linha
Outra linha
...
FINAL;
echo $string;
