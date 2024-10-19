<?php
include_once "./includes/cabecera.php";
?>
        <!-- contenedor -->
        <div id="contenedor">
            <!--Barra lateral-->
            <?php
            include_once "./includes/lateral.php"
            ?>

            <!--Caja principal-->
            <div id="principal">
                <h1>Ultimas entradas</h1>

                <article class="entrada"> 
                    <a href="">
                        <h2>Titulo entrada</h2>
                        <p> Descripcion Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Doloribus accusamus repellendus quidem. Perspiciatis asperiores officiis et eligendi 
                            voluptates architecto porro necessitatibus dolores corporis veritatis aspernatur,
                            ut fugit, inventore alias magnam!</p>    
                    </a>
                </article>

                <article class="entrada"> 
                    <a href="">
                        <h2>Titulo entrada</h2>
                        <p> Descripcion Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Doloribus accusamus repellendus quidem. Perspiciatis asperiores officiis et eligendi 
                            voluptates architecto porro necessitatibus dolores corporis veritatis aspernatur,
                            ut fugit, inventore alias magnam!</p>    
                    </a>
                </article>

                <article class="entrada"> 
                    <a href="">
                        <h2>Titulo entrada</h2>
                        <p> Descripcion Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Doloribus accusamus repellendus quidem. Perspiciatis asperiores officiis et eligendi 
                            voluptates architecto porro necessitatibus dolores corporis veritatis aspernatur,
                            ut fugit, inventore alias magnam!</p>    
                    </a>
                </article>

                <div id="ver-todas">
                    <a href="">Ver toda las entradas</a>
                </div>

            </div> <!--Fin Principal-->
        <div class="clearfix"></div>
        </div> <!-- Fin contenedor -->

<?php
include_once "./includes/piePagina.php";
?>