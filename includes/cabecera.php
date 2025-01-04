<?php
include_once './Config/conexion.php';
$BD = conectarDB();
include_once './includes/helpers.php';


?>
<!DOCTYPE html>
<html lang="es">

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
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php
                $categorias = conseguirCategorias($BD);
                if (!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                        <li><a href="categoria.php?id_categorias=<?= $categoria['id_categorias'] ?>"> <?= $categoria['nombre'] ?> </a></li>

                <?php
                    endwhile;
                endif;
                ?>
                <li><a href="index.php">Sobre mi</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>