<?php
function encontrarPalavrasRepetidas($texto) {
    $palavras = str_word_count(strtolower($texto), 1);
    $palavrasRepetidas = array();
    $palavrasContador = array_count_values($palavras);
 
    foreach ($palavrasContador as $palavra => $ocorrencias) {
       if ($ocorrencias > 1) {
          $palavrasRepetidas[] = $palavra;
       }
    }
 
    return $palavrasRepetidas;
 }
 
 // Testando a função
 $texto = "O rato roeu a roupa do rei de Roma, mas o rei não se importou.";
 $palavrasRepetidas = encontrarPalavrasRepetidas($texto);
 echo "Palavras repetidas: ";
 print_r($palavrasRepetidas);