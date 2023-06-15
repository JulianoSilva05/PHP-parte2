<?php
/**
 * Quando trabalhamos com STATIC, não precisamos instanciar a classe
 */

class Login{
    public static $user;
    public static function verificaLogin(){
        echo "O usuario ".self::$user." está logado";//$this não funciona em metodos estaticos
    }
}
Login::$user = "Juliano";
Login::verificaLogin(); //Declara o nome da Classe, :: e o metodo que deseja chamar.
