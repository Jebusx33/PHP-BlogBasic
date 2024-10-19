<?php 
include_once './includes/helpers.php'
?>
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
        
                    <?php
                  //prueba aaray validadcion
                  /* if(isset($_SESSION['errores'])): 
                        var_dump($_SESSION['errores']);
                  endif; */
                  ?>
                    <h3>Registrate</h3>
                  <!--Mostrar errores-->
                    <?php if(isset($_SESSION['completado'])): ?>
                    <div class="alerta alerta-exito">
                        <?php echo $_SESSION['completado'];?>
                    </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                    <div class="alerta alerta-exito">
                        <?php echo $_SESSION['errores']['general'];?>
                    </div>    
                    <?php endif; ?>    
                    <form action="./registro.php" method="POST">

                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'):''; ?>

                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido'):''; ?>


                        <label for="email">Email</label>
                        <input type="email" name="email" id="">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'):''; ?>


                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password'):''; ?>


                        <input type="submit" name="submit" value="Registrar">
                    </form>
                    <?php borrarErrores(); ?>
                </div>
</aside>