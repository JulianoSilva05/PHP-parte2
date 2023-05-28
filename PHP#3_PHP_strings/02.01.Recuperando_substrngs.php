<?php

$email = "juliano.fernando@fiemg.com.br";
echo substr($email,0,7).PHP_EOL;//Pega o nome
echo substr($email,16).PHP_EOL;//pego so o dominio //OBS.: se não informar o fim, por padrão ele pega até o final
/**Porem isso não é produtivo, pois se mudar o nome, tem que mudar o indice */