<? php
    
<?php

require'../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

var_dump($_ENV['KEY']);
    