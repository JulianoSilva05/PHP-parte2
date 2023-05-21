<?php

/**SUBROTINA */
function tracos() //Subrotina não tem retorno
{
    echo "***************";
}

function exibeMensagem($mensagem) //Subrotina não tem retorno
{
    /**Podemos ou não colocar uma parametro */
    echo $mensagem . PHP_EOL;
}

/**FUNÇÃO SACAR */
function sacar(array $conta2, float $valorASacar): array //Função tem retorno //se não especificar o tipo de dado,o programa aceita string, e irá gerar um erro.
//O mesmo erro acontece se tentarmos colocar string no lugar de $conta2
//Por isso vamos usar o array
//após o parametro, devemos colocar o tipo de dado que deve retornar 
{
    if ($valorASacar > $conta2["saldo"]) {
        exibeMensagem("Saldo insuficiente");
    } else {
        $conta2["saldo"] -= $valorASacar;
    }
    return $conta2;
}
/**FUNÇÃO DEPOSITAR */
function depositar(array $conta, float $valorADepositar):array
{
    if ($valorADepositar > 0) {
        $conta["saldo"] += $valorADepositar;
    } else {
        exibeMensagem("Somente valores positivos para deposito");
    }
    return $conta;
}

$contasCorrentes = [
    390245637812 => ["titular" => "Juliano", "saldo" => 1000],
    18564927812 => ["titular" => "Marcos", "saldo" => 2000],
    52896346971 => ["titular" => "Maria", "saldo" => 3000]
];

/** Sacar da conta do Juliano */
$contasCorrentes[390245637812] = sacar($contasCorrentes[390245637812], 500);
echo $contasCorrentes[390245637812]["titular"] . " - " . $contasCorrentes[390245637812]["saldo"];
exibeMensagem("");

/** Sacar da conta do Marcos */
$contasCorrentes[18564927812] = sacar($contasCorrentes[18564927812], 500);
echo $contasCorrentes[18564927812]["titular"] . " - " . $contasCorrentes[18564927812]["saldo"];
exibeMensagem("");

/** Sacar da conta do Maria */
$contasCorrentes[52896346971] = sacar($contasCorrentes[52896346971], 1500);
echo $contasCorrentes[52896346971]["titular"] . " - " . $contasCorrentes[52896346971]["saldo"];
exibeMensagem("");

/**DEPOSITAR */
@$contasCorrentes[390245637812] = depositar(@$contasCorrentes[390245637812], 500);

exibeMensagem("");
exibeMensagem("*********************");
exibeMensagem(tracos());
foreach ($contasCorrentes as $cpf => $conta) { //as CHAVE, e para ininformar que $
    /*echo $cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"] . PHP_EOL;*/
    exibeMensagem($cpf . " - " . $conta["titular"] . "\t" . $conta["saldo"]);
}


//  Para saber mais: Sintaxes
// PRÓXIMA ATIVIDADE

// Nós vimos neste capítulo como definir e utilizar funções, inclusive vimos como definir os tipos utilizados nessas funções.

// Sem retorno
// Vimos que é possível criarmos funções que não retornam nada, como foi o caso da função exibeMensagem. Se eu quiser especificar que uma função não retorna nada, podemos utilizar o tipo void. O tipo void é um tipo especial que significa algo como "ausência de valor" (tradução de void em inglês é "vácuo"). Sendo assim, funções que não retornam nada podem ter esse tipo de retorno especificado.

// function exibeMensagem(string $mensagem): void
// {
//     echo $mensagem . PHP_EOL;
// }COPIAR CÓDIGO
// Ordem dos parâmetros
// Nós vimos também como passar diversos parâmetros para uma função. Ao passar valores por parâmetro, a ordem deles importa. Ou seja, uma função function teste($a, $b), quando for chamada com teste(1, 2) vai ter o valor de $a = 1 e $b = 2. Embora isso possa parecer óbvio, é muito importante frisar esses detalhes.

// Parâmetros nomeados
// Caso a gente queira informar os parâmetros fora de ordem ou até pular alguns parâmetros que possam ser opcionais (vamos aprender a declarar parâmetros opcionais mais adiante na formação) nós podemos utilizar uma funcionalidade do PHP chamada parâmetros nomeados. É basicamente uma sintaxe que permite que a gente informe o nome do parâmetro que estamos passando. Exemplo:

// function depositar(array $conta, float $valorADepositar): array
// {
//     // implementação da função
// }

// $contasCorrentes['123.456.789-10'] = depositar(valorADepositar: 500, conta: $contasCorrentes['123.456.789-10']);COPIAR CÓDIGO
// Neste vídeo eu falo mais sobre essa funcionalidade que chegou na versão 8.0 do PHP. Não se preocupe com os conceitos que você ainda não conhecer como classes, herança, etc. Foque na funcionalidade de parâmetros nomeados. :-D


/**
 * Nessa aula falamos sobre função! Aprendemos:
 * uma função encapsula uma funcionalidade/um código
*uma função usa a palavra chave function, possui um nome, pode ter parâmetros, tem um corpo e pode ter um retorno
*para chamar uma função usamos o nome dela passando o valor dos parâmetros
*uma função pode especificar os tipos na declaração do parâmetro (a partir da *versão 7), como também o tipo do retorno
 * 
 */