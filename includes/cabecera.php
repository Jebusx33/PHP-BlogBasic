<?php
include './Config/conexion.php';
$BD = conectarDB();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog VideoJuegos</title>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <!-- Cabezera-->
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">Bolg de VideoJuegos y Peliculas</a>
            </div>

            <!-- MENU-->
            <nav id="menu" >
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php">Categoria 1</a></li>
                    <li><a href="index.php">Categoria 2</a></li>
                    <li><a href="index.php">Categoria 3</a></li>
                    <li><a href="index.php">Categoria 4</a></li>
                    <li><a href="index.php">Sobre mi</a></li>
                    <li><a href="index.php">Contacto</a></li> 
                </ul>
            </nav>
        </header>
    
