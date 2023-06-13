<?php
class Carro {
    public $marca;
    public $modelo;

    public function obterDescricao() {
        return "Carro: " . $this->marca . " " . $this->modelo;
    }
}

// Instanciando um objeto da classe Carro
$carro = new Carro();
$carro->marca = "Toyota";
$carro->modelo = "Corolla";

// Obtendo a descrição do carro
$descricaoCarro = $carro->obterDescricao();

// Exibindo a descrição do carro
echo $descricaoCarro;