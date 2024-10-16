<?php
include './Config/conexion.php';
$db= conectarDB();
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
            <a href="index.php">
                Bolg de VideoJuegos y Peliculas
            </a>
        </div>
   
    <!-- MENU-->
        <nav id="menu" >
          <ul>
            <li><a href="index.php">Inicio</a</li>
            <li><a href="index.php">Categoria 1</a</li>
            <li><a href="index.php">Categoria 2</a</li>
            <li><a href="index.php">Categoria 3</a</li>
            <li><a href="index.php">Categoria 4</a</li>
            <li><a href="index.php">Sobre mi</a</li>
            <li><a href="index.php">Contacto</a</li> 
          </ul>
        </nav>
    </header>
<div id="contenedor">
<!--Barra lateral-->
<aside id = "sidebar">
<div id="login" class ="bloque">
        <h3>Indentificate</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="">

            <label for="password">Contraseñaa</label>
            <input type="password" name="password" id="">

            <input type="submit" value="Entrar">
        </form>      
    </div>
    <div id="register" class ="bloque">
        <h3>Registrate</h3>
        <form action="registro.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="">

            <label for="email">Email</label>
            <input type="email" name="email" id="">

            <label for="password">Contraseñaa</label>
            <input type="password" name="password" id="">

            <input type="submit" value="Registro">
        </form>
    </div>
</aside>
<!--Caja principal-->
<div id="principal">
<h1>Ultimas entradas</h1>
    <article class="entrada"> 
        <h2>Titulo entrada</h2>
        <p> Descripcion Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusamus repellendus quidem. Perspiciatis asperiores officiis et eligendi voluptates architecto porro necessitatibus dolores corporis veritatis aspernatur, ut fugit, inventore alias magnam!</p>
    </article>
    <article class="entrada"> 
        <h2>Titulo entrada</h2>
        <p> Descripcion Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusamus repellendus quidem. Perspiciatis asperiores officiis et eligendi voluptates architecto porro necessitatibus dolores corporis veritatis aspernatur, ut fugit, inventore alias magnam!</p>
    </article>
    <article class="entrada"> 
        <h2>Titulo entrada</h2>
        <p> Descripcion Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusamus repellendus quidem. Perspiciatis asperiores officiis et eligendi voluptates architecto porro necessitatibus dolores corporis veritatis aspernatur, ut fugit, inventore alias magnam!</p>
    </article>

    <div id="ver-todas">
         <a href="index.php">Ver toda las entradas</a>
    </div>
</div> <!--Fin Principal-->

<div class="clearfix"></div>
</div>
<footer id ="pie">
        <div class="last-text">
            <p>Desarrollado por Jesús Arias &copy <span id="anio-actual"> </span> <a class="web"
                    href="https://www.jesusarias.com.ar"> www.jesusarias.com.ar</a> </p>
            <a href="" class="top"> <i class="bx bx-up-arrow-alt"></i> </a>
        </div>

    </footer>
 <script>
    function typed() {
    var typed = new Typed(".text", {
        strings: ["Programador", "Desarrollador web", "Analista de Sistemas."],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        logo: true
    })
}

setTimeout(function () {
    typed();
}, 1600);

const fechaActual = new Date();
const anioActual = fechaActual.getFullYear();
document.getElementById("anio-actual").innerHTML = anioActual;
 </script>
</body>
</html>