<?php
class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class Livro extends Produto {
    public $autor;

    public function __construct($nome, $preco, $autor) {
        parent::__construct($nome, $preco);
        $this->autor = $autor;
    }
}

$livro = new Livro("Harry Potter", 49.90, "J.K. Rowling");
echo "Nome: " . $livro->nome . "<br>";
echo "Preço: " . $livro->preco . "<br>";
echo "Autor: " . $livro->autor;