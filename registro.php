<?php
session_start();
//Recoje los valores del formulario de registro
if ($_POST) {
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
$email = isset($_POST['email']) ? $_POST['email'] : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;
 // array de errores
 $errores=array();
 
 //valida los campos antes de ser enviados a la BD;
//valida nombre 
if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)) {
    $nombre_valido  = true;
}else{
    $nombre_valido = false;
    $errores['nombre'] = "El nombre no es valido";
}
//valida apellido
if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/",$apellido)) {
    $apellido_valido  = true;
}else{
    $apellido_valido = false;
    $errores['apellido'] = "El apellido no es valido";
}
//valida email
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_valido  = true;
}else{
    $email_valido = false;
    $errores['email'] = "El email no es valido";
}
//valida password
if (!empty($password)) {
    $password_valido  = true;
}else{
    $password_valido = false;
    $errores['password'] = "La contraseña no es valida";
}
$guardar_usuario= false;

if (count($errores) == 0) {
    //Inserta usuario a la base de datos
    $guardar_usuario= true;

}else{
    $_SESSION['errores'] = $errores;
    header('Location: index.php');
}


}

?>