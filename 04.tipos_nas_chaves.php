<?php
/*
PHP só consegue trabalhar, em arrays associativos, com chaves dos tipos inteiro ou string. Qualquer outro tipo diferente desses vai ser convertido para uma string ou inteiro. */
$array = [
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d"
];

foreach($array as $item){
    echo $item;
}
/*
Repare que, quando adicionamos o valor b, definimos uma string 1 como chave. Quando o PHP reconhece que uma chave tem um valor que pode ser representado numericamente, ele tenta convertê-la para um inteiro. Nessa conversão, ele sobrescreveu o primeiro índice - dessa forma, o "b" substituiu o "a".

Já quando tentamos utilizar um tipo float como chave, ele também foi convertido para um inteiro, ignorando o decimal. Assim, ao invés de 1.5, ficamos novamente com 1, e o valor c sobrescreveu o anterior.
Em seguida, tentamos adicionar um valor booleano true como índice. Porém, ele também é convertido para um inteiro 1, sobrescrevendo novamente o valor. Já o booleano false seria convertido para 0.

Consulte a documetação:
https://www.php.net/manual/pt_BR/language.types.array.php
*/


/*
11
O que aprendemos?
PRÓXIMA ATIVIDADE

Nessa aula, aprendemos como criar uma estrutura de dados mais complexa usando e combinando arrays associativos. Vimos e aprendemos que:

um array associativo sempre define elementos composto por uma chave e um valor
a associação entre chave e valor é feito com =>
a chave funciona como um índice explicito (definido por nós)
o valor pode ser um valor primitivo ou outro array
a chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter
um array associativo também é chamado de mapa ou dicionário
podemos combinar um array simples e array associativo para definir estruturas mais complexas
o laço foreach oferece uma forma mais expressiva de iteração
no foreach podemos acessar o índice e o valor do elemento da iteração
arrays podem crescer e podemos adicionar novos elementos
em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;)
nesse caso o PHP automaticamente incrementa o índice
*/
