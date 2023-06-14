<?php
//Henrança
/**
 * A herança é o recurso da OOP que dá a possibilidade de uma classe herdar métodos e propriedades de outra;
 * A palavra reservada é extends;
 * Exemplo:
 * class Programador extends Pessoa{
 * }
 */
class Humano{
    public $idade = 34;
    public function falar(){
        echo "Bla Bla Bla".PHP_EOL;
    }
    private function apitar(){
        echo "PIIIIIIIIIIIIIIIIHHHHHHHHHHHHH".PHP_EOL;
    }
    public function acessaApito(){
        $this->apitar().PHP_EOL;
    }
    protected function falarBaixo(){
        echo "bla bla".PHP_EOL;
    }
    public function acessaFalarBaixo(){
        $this->falarBaixo().PHP_EOL;
    }
}

class Programador extends Humano{
    // public function acessaApitar(){
    //     $this -> apitar().PHP_EOL; //Irá gerar um erro, porque o metodo "apitar" é private
    // }
    public function acessaAcessaApito(){
        $this->acessaApito();
    }

}

$yan = new Humano;
$yan -> falar();

$juliano = new Programador;
$juliano -> acessaFalarBaixo();
// $juliano -> acessaApitar();
echo "Acessa o acessoApito".PHP_EOL;
$juliano -> acessaAcessaApito();

$juliano -> falar();
echo $juliano->idade;
echo $juliano->acessaApito();

?>