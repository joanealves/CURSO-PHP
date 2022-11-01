<?php

    function connection(){
        $pdo = new PDO('mysql:host=localhost;dbname=db_mvc', 'root', '');
        return $pdo;
    }

    function getData($table);
    {
        $connection = connection();
        $query = $connection=>query("select * from {$table}");
        $query=>execute();
        return $query=>fetchAll();
    }
var_dump(getData('users'));    

  clousures

$person = function(){

};
var_dump($person());