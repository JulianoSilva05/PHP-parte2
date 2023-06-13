<?php
//este arquivo servirá para criar contas
function criarConta(string $cpf, string $nomeTitular, float $saldo): array //essa função retorna valor a partir dos atributos
{
    return[
        $cpf =>[
            'titula' => $nomeTitular,
            'saldo' => $saldo,
        ]
     ];
}