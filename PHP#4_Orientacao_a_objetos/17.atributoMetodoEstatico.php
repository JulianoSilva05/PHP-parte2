<?php
//Atributo ou metodo ESTÁTICO
/**
 * a palavra-chave static é usada para declarar propriedades e métodos estáticos em uma classe. Quando uma propriedade ou método é declarado como estático, significa que eles pertencem à classe em si, e não a instâncias individuais dessa classe.
 */
/**
 * Propriedades estáticas: 
 * Uma propriedade estática é compartilhada entre todas as instâncias de uma classe. Isso significa que, independentemente do número de objetos criados a partir da classe, haverá apenas uma cópia da propriedade estática. As propriedades estáticas são declaradas usando a palavra-chave static antes do nome da propriedade. Por exemplo:
 */
class MinhaClasse {
    public static $propriedadeEstatica = "Valor estático";
}

//Para acessar uma propriedade estática, não é necessário criar uma instância da classe. Você pode acessar diretamente usando o nome da classe seguido do operador de resolução de escopo ::. Por exemplo:

echo MinhaClasse::$propriedadeEstatica;


//Método Estático
/**
 * Métodos estáticos: Um método estático é um método que pode ser chamado diretamente na classe, sem a necessidade de criar uma instância dessa classe. Os métodos estáticos também são declarados usando a palavra-chave static antes do nome do método. Por exemplo:
 */

 class MinhaClasse {
    public static function metodoEstatico() {
        echo "Método estático";
    }
}

//Para chamar um método estático, você pode usar o nome da classe seguido do operador de resolução de escopo ::. Por exemplo:

MinhaClasse::metodoEstatico();

/**
 * Os métodos estáticos geralmente são usados para funções utilitárias que não precisam de acesso a propriedades específicas de uma instância. Eles podem ser úteis para realizar operações comuns que não dependem de nenhum estado específico da instância.
*Além disso, propriedades e métodos estáticos podem ser acessados dentro de outros métodos estáticos usando a palavra-chave self em vez de $this, que é usado para acessar propriedades e métodos de instâncias regulares.

*É importante ter em mente que propriedades e métodos estáticos são globais para a classe e podem ser acessados de qualquer lugar no código, mesmo sem instanciar a classe. Portanto, é recomendável usá-los com cautela e apenas quando faz sentido lógico compartilhar determinada informação entre todas as instâncias da classe.
 */