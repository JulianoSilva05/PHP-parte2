<?php
class Retangulo {
    private $largura;
    private $altura;
  
    public function __construct($largura, $altura) {
      $this->largura = $largura;
      $this->altura = $altura;
    }
  
    public function calcularArea() {
      return $this->largura * $this->altura;
    }
  
    public function calcularPerimetro() {
      return 2 * ($this->largura + $this->altura);
    }
  
    public function getLargura() {
      return $this->largura;
    }
  
    public function getAltura() {
      return $this->altura;
    }
  }
  
  // Exemplo de uso da classe
  
  $retangulo = new Retangulo(5, 10);
  echo "Área do retângulo: " . $retangulo->calcularArea() . "<br>";
  echo "Perímetro do retângulo: " . $retangulo->calcularPerimetro() . "<br>";
  