<?php
/**
 * Quando trabalhamos com STATIC, não precisamos instanciar a classe
 */

class Login{
    public static $user;
    public static function verificaLogin(){
        echo "O usuario ".self::$user." está logado<br />";//$this não funciona em metodos estaticos
    }
    public function sairSistema(){
        echo "O usuário saiu do sistema<br />";
    }
}
Login::$user = "Juliano";
Login::verificaLogin(); //Declara o nome da Classe, :: e o metodo que deseja chamar.


//Criar metodos e atributos ESTATICOS não significa que não poderá instanciar objetos
$juliano_fernando = new Login();
$juliano_fernando -> sairSistema();