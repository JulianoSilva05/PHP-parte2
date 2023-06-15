<?php
class MinhaClasse {
    const PI = 3.14;
    
    public function imprimirValorDePI() {
        echo self::PI;
    }
}

echo MinhaClasse::PI;
