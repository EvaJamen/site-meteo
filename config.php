<?php

define ('URL', 'http://localhost:8888/'); // avec cette url, la page header(?) prend en compte le fichier css qu'il ne prenait pas en compte avec le contenu ci-dessous. Il a aussi fallu changer la nomnclature du ahref dans link rel, dans le fichier header.

//define('URL', 'http://localhost/p2020/exercices/cours-23-php-routing/');
//
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'hetic_p2020_newsletters');
//define('DB_USER', 'root');
//define('DB_PASS', 'root'); // '' par défaut sur windows
//
//try
//{
//    // Try to connect to database
//    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
//
//    // Set fetch mode to object
//    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
//}
//catch (Exception $e)
//{
//    // Failed to connect
//    die('Could not connect');
//}