<?php

//Recoje los valores del formulario de registro
if ($_POST) {
    include_once './Config/conexion.php';
    $BD = conectarDB();

    if ($_SESSION) {
        session_start();    
    }
    
                                        //evita que se meta consulta sql y tranfora todo a string 
    $nombre = isset($_POST['nombre']) ? mysqli_escape_string($BD, $_POST['nombre']): false;
    $apellido = isset($_POST['apellido']) ? mysqli_escape_string($BD, $_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_escape_string($BD, $_POST['email']) : false;
    $password = isset($_POST['password']) ? mysqli_escape_string($BD, $_POST['password']) : false;
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


    //Cifrado de contraseña a registrar
                       //codificacion hash del pass y  veces de codificacion
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
    /*
      //verificacion del cifrado
    var_dump($password);
    var_dump($password_segura);
    //verifica que el pass sea igual a la pass cifrada y devuelve un boolean
    var_dump(password_verify($password, $password_segura));
    die();
    */
    //Insercion de registtro
    $sql_insert="INSERT INTO usuarios VALUES(NULL,'$nombre','$apellido','$email','$password_segura',CURDATE());";
    $crear_usuario = mysqli_query($BD,$sql_insert); 
    /* 
    //verifica error de evio de reg a BD
       var_dump(mysqli_error($crear_usuario));
        die();
*/
    if ($crear_usuario) {
        $_SESSION['completado'] ='El registro se ha completado con éxito';
    }else{
        $_SESSION['errores']['general']= "Fallo al guardar el usuario!!";
    }

}else{
    $_SESSION['errores'] = $errores;

}

}
header('Location:index.php');
?>