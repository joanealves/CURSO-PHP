<?php
// para requisições de arquivos
    // // var_dump($_REQUEST['name']);
    // if($_SERVER['REQUEST_METHOD']== 'POST'){

    //     var_dump($_FILES);
    // }
    
    // sanitizadores e validates

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
// para validar a variavel

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo 'Email válido';
    }else{
        echo 'email inválido';
    }

    // var_dump($name,$email);

}