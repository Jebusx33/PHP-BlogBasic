<?php
function conectarDB() {
    $db = mysqli_connect('localhost', 'test', '1234', 'testdb');
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

