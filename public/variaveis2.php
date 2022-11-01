<!-- Verificar se uma variavel existe -->
<?php
$name = 'Joane';

echo isset($name);
//1-thruty
//  - falsy
//serve tambem para verificar array
$person = ['name' => 'Joane','age'=> 35];

echo isset($person['name']);


----------------------------------------------------------------------------------
// Variavel global e local para ter acesso: ex 1

$name ='Joane';

Function person()
{
    global $name;
    echo $name;
}
person();

// exemplo2

$name ='Joane';

Function person()
{
    echo $GLOBALS['name'];
}
person();
-------------------------------------------------------------------------------------
// variaveis super GLOBAl: Sempre com as letras maiusculas. $_

$_COOKIE: valor guardado no navegador e depois pode ser resgatado. ele tem data de validade
ele expera primeiro o nome depois o valor e a data de expiração. ex:
{
    setcookie('name','Joane',time()+2*24*60*60);
}ou pode colocar assim: setcookie('curso','PHP',strtotime('+5days')); para excluir um cookie basta 
colocar sinal de menos.

$_SESSION: guardado no navegador mas nao guarda valor da sessao, ele guarda um id.ex:
    $_SESSION['name'] = 'Joane';
e para resgatar: echo $_SESSION['name']; é preciso iniciar a sessao :
    session_start();
    para pegar o id da sessao:
    echo SESSION_ID;
    para excluir uma sessao:
    unset($_SESSION['name']);
    session_destroy(); exclui todas as sessoes.
Verificando no inspensionar ele aparece como phpstorm  e o numero do id.

$_ENV:
$_FILES:
$_GET:
$_POST:
$_REQUEST:
$_SERVER: 
