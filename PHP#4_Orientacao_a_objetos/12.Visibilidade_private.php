<?php
//Visibilidade
/**
 * Temos três formatos de Visibilidade: public, protected e private;
 * public:  A propriedade ou método pode ser acessada de qualquer forma;
 * protected: A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma de herança;
 * private: a propriedade ou método pode ser acessada apenas pela classe que foi criada;
 */
class Carro{
    public $rodas = 4;
    private $vidro = "Sem pelicula"; //Se eu colocar como private, essa propriedade só poderá ser acessada pelo classe "Carro".
    //Como posso acessar sem alterar a class?
    //Criando uma nova função public, que pega a propriedade que é privada e colocando como publica
    public function getVidro(){
        return $this->vidro;        
    }

}
class Mecanico{
    public function alterarRodas($carro) {
        $carro -> rodas = 3;        
    }
    public function colocarPelicula($carro,$pelicula){
        $carro -> vidro = $pelicula;
    }
}


$fusca = new Carro;
echo $fusca -> rodas.PHP_EOL;

$juliano = new Mecanico;
$juliano ->alterarRodas($fusca);
echo $fusca -> rodas.PHP_EOL;

// $juliano->colocarPelicula($fusca,"G20");
echo $fusca->getVidro();
// echo $fusca -> vidro = "G10".PHP_EOL;//Essa linha irá gerar um erro, pois não há como alterar uma propriedade private


?>
