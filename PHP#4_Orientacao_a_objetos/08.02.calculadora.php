<?php
class Calculadora{
    public float $valorUm;
    public float $valorDois;
    public string $operacao;

    public function Calcular($valorUm, $valorDois, $operacao){
        if ($operacao == "+"){
            $resultado = $valorUm + $valorDois;
        } else if ($operacao == "-"){
            $resultado = $valorUm - $valorDois;
        } else if ($operacao == "*"){
            $resultado = $valorUm * $valorDois;
        } else if ($operacao == "/"){
            if ($valorDois == 0){
                $resultado = "Não é possivel dividir por zero";
            }else{
                $resultado = $valorUm / $valorDois;
            }
        
        }else{
            $resultado = "ERRO: não foi possivel realizar a operação";
        } 
        return "Resultado: $resultado";
    }
}
$cal = new Calculadora;
echo $cal ->Calcular(2,20,"*");
