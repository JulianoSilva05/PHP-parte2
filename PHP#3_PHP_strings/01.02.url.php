<?php

$url = "https://www7.fiemg.com.br";

/**Se ue quiser verificar se o site possui HTTPS */
//Posso verificar se começa usando str_starts_with()
if (str_starts_with($url,"https")){
    echo "É uma URL segura";
}else{
    echo "Não é uma URL segura";
}
echo PHP_EOL;

// /Posso verificar se termina usando str_ends_with()
if (str_ends_with($url, ".br")){
    echo "É um domínio do Brasil";
}else{
    echo "Não é um dominio do Brasil";
}

