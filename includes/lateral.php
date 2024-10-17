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
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="">
            
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="">

            <label for="email">Email</label>
            <input type="email" name="email" id="">

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="">

            <input type="submit" name="submit" value="Registrar">
        </form>
    </div>
</aside>