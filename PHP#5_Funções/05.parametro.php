<?php
/**Podemos passar parâmetros para a função
 * Ests parâmetros são como variãveis, que são utilizados dentro da função para moldas a sua execução;
 * Não há número máximo de parâmetros;
 * function teste(param, param2){
 *  //bloco de código
 * }
 */
function velocidadeMaxima($modelo,$vel){ //parametro sem retorno
    
    if(is_int($vel)){
        echo "O carro $modelo atinge a velocidade máxima de $vel Km/h.".PHP_EOL;
    } else{
        echo "Passe um numero inteiro".PHP_EOL;
    }
}
velocidadeMaxima("Gol", 120);
velocidadeMaxima("Fusca", 150);
echo "*********************************".PHP_EOL;

//Mais parâmetros
function descreverAnimal($nome, $raca){
    echo "O $nome é da raça $raca".PHP_EOL;
}
descreverAnimal("bob","Vira Lata");
descreverAnimal("Pith","Labrador");