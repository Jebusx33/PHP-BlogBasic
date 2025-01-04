<?php
include_once "./includes/cabecera.php"; ?>
<!-- contenedor -->
<div id="contenedor">
    <!--Barra lateral-->
    <?php
    include_once "./includes/lateral.php"
    ?>

    <!--Caja principal-->
    <div id="principal">
        <h1>Ultimas entradas</h1>


        <?php
        $entradas = conseguirUltimasEntradas($BD);
        if (!empty($entradas)):
            while ($entrada = mysqli_fetch_assoc($entradas)):
        ?>
                <article class="entrada">
                    <a href="">
                        <h2><?= $entrada['titulo']; ?></h2>
                        <span class="fecha"><?= $entrada['categoria']." | ".$entrada['fecha']; ?></span>
                        <p> <?= substr($entrada['descripcion'], 0, 185)."..."; ?></p>
                    </a>
                </article>
        <?php
            endwhile;
        endif;
        ?>


        <div id="ver-todas">
            <a href="">Ver toda las entradas</a>
        </div>

    </div> <!--Fin Principal-->
    <div class="clearfix"></div>
</div> <!-- Fin contenedor -->

<?php
include_once "./includes/piePagina.php";
?>