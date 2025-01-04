<?php
//Iniciar la secion y la conexion a la BD
include_once './Config/conexion.php';
$BD = conectarDB();

//recoger datos del formulario
if (isset($_POST)) {

    //Borra error antiguo
    if (isset($_SESSION['error_login'])) {
        unset($_SESSION['error_login']);
    }

    //Recoje datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consulta para comprobar las credenciales de usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($BD, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        //Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {
            //Utilizar una sesion para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario;
        } else {
            //si algo falla envias una sesion con el fallo
            $_SESSION['error_login'] = "login incorrecto!!";
        }
    } else {
        //mensaje de error
        $_SESSION['error_login'] = "login incorrecto!!";
    }
}

//redirigir al index
header('Location:index.php');
