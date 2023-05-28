<?php
/**Entendemos como verificar a estrutura de um array, se ele é ou não e se esse array é uma lista. Vamos dizer se é uma lista. Agora eu quero verificar, por exemplo, vamos lá nas minhas notas, se a Ana fez essa prova ou eu quero verificar se alguém tirou uma nota 10 nessa minha prova. */

$notas = [
    'Juliano' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 6
];

krsort(array:$notas);
var_dump($notas);

if(is_array($notas)){
    echo "Sim, é array".PHP_EOL;
}

var_dump(array_is_list($notas));

/**Como verificar se existe o "indice" Juliano . Usando foreach*/
$encontrado = false;
foreach ($notas as $aluno => $nota){
    if ($aluno === 'Juliano'){
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "O aluno foi encontrado!".PHP_EOL;
} else {
    echo "O aluno não foi encontrado.".PHP_EOL;
}
/**Porem o PHP tem uma função que ajuda muito. Podemos usar uma linguagem de mais baixo nivel */

echo "Juliano está inscrito?: ".PHP_EOL;
//array_key_exists('Juliano',$notas).PHP_EOL;//dentro do parametro, coloco o que quero buscar, e no segundo parametro Onde quero buscar!

if (array_key_exists('Juliano',$notas)){
    echo "Sim".PHP_EOL;
}
else{
    echo "Não".PHP_EOL;
}
echo "Juliano fez a prova: ".PHP_EOL;
/*Ok, o indice JULIANO existe, mas a nota está NULL*/
/*Como verificar as notas?
Para isso, podemos usar uma função para verificar se os valores são nulos*/
if (isset($notas["Juliano"])){
    echo "sim, e sua nota foi " .$notas['Juliano'].PHP_EOL;
}else{
    echo "Não".PHP_EOL;
};

/**E agora, se que quiser verificar se um valor existe dentro de um array? */
//Exemplo, saber se alguem tirou 10

echo "Alguém tirou 10?".PHP_EOL;
var_dump(in_array(10,$notas));

echo "Alguém tirou 6?".PHP_EOL;
var_dump(in_array(6,$notas));

//array_key_exists = verifica se a chave existe
//in_array = verifica se o valor existe
//isset = verifica se a chave existe e não é nula