<?php
/**Entendemos como verificar a estrutura de um array, se ele é ou não e se esse array é uma lista. Vamos dizer se é uma lista. Agora eu quero verificar, por exemplo, vamos lá nas minhas notas, se a Ana fez essa prova ou eu quero verificar se alguém tirou uma nota 10 nessa minha prova. */

$notas = [
    'Juliano' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
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

echo "Juliano fez a prova: ";
//array_key_exists('Juliano',$notas).PHP_EOL;//dentro do parametro, coloco o que quero buscar, e no segundo parametro Onde quero buscar!

if (array_key_exists('Juliano',$notas)){
    echo "Sim";
}
else{
    echo "Não";
};
