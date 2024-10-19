<?php
function conectarDB() {
    $server = 'localhost';
    $user='test';
    $pass='1234';
    $dataBase ='blog_master';
    $db = mysqli_connect($server, $user, $pass, $dataBase);
    if (!$db) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        exit;
    }
    return $db;
}
//iniciar la secion
session_start();
?>

