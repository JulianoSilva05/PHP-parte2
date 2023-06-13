<?php
/**
 * 6.	Crie uma classe Cachorro;
 * Crie o método latir e andar.
 * Execute o método em novas instâncias da classe.
 */

 class Cachorro{
    function latir(){
        echo "Au au<br />";
    }

    function andar($metros){
        echo "O cachorro andou $metros metros<br />";
    }
 }

 $bob = new Cachorro;
 $Tupa = new Cachorro;

 $bob -> latir();
 $bob -> andar(10);

 $Tupa -> latir();
 $Tupa -> andar(2);