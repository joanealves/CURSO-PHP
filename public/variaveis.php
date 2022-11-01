<!-- require/include:  quando vou chamar uma parte de um código vindo de outro arquivo.
    diferença entre include/require: include mostra a mensagem de erro mais continua executando. 
    require: se der erro ele para ali mesmo.

    require_once: mostra apenas uma vez inclusive o erro.
    include_once: para ter certeza que esta includido apenas uma vez.

    ______________________________________________________________________________________________

    gettype : mostra o tipo de dado.
    ______________________________________________________________________________________________

    Variáveis , seus tipos de dados e referencia:

    -string entre ''ou "". 
    -numbers:(integers, float(double)): integer 10 double 10.2
    -booleans: true e false
    -arrays: [varios tipos de valores]
    -objects: ex class Person(){echo newPerson}
    -null: ausencia de valor.

    --variavel-- $_ ou $name minusculo
    --Constantes-- não altera o valor e usa letras maiusculas ex:
            define('NAME','Joane');
            echo NAME;
        constantes pre definidades ou constantes magicas:
            ex _ _FUNCTION__ ele pega o nome da funcao
                --METHOD--
                
        Para saber se uma constant foi declarada ex:
            define('NAME','Joane');
            if(defined('NAME')) echo 'foidefinido'
            
        Se eu quiser pegar todas as constantes que o PHP tem?
            $cons = get_defined_constantes(true);
                var_damp(cons);
                abre uma lista com todas as constantes e seus valores
        
    var_damp pega o conteudo de uma variavel.




operadores aritimeticos Php soma,subtração, multiplicação, divisao. resto %


operadores logicos: && (and), || (or), !
    && (VErifica que seja verdadeiro os valores)
    || (verifica se um ou outro seja verdadeiro)   
    ! (significa negação, se um for true e eu coloca ! ele se torna false) 
    !! (ele continua com mesmo valor).


-->