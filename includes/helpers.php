<?php
function mostrarError($errores, $campo)
{
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
    }
    return $alerta;
}

function borrarErrores()
{
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }
    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }
}

//Obtiene las categorias
function conseguirCategorias($BD)
{
    $sql = "SELECT * FROM categorias ORDER BY id_categorias ASC";
    $categorias = mysqli_query($BD, $sql);
    $result = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = $categorias;
    }
    return $result;
}
//Obtiene las entradas
function conseguirUltimasEntradas($BD)
{
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
        "INNER JOIN categorias c ON e.categorias_id = c.id_categorias ".
        "ORDER BY e.id_entradas DESC LIMIT 4";
    $entradas = mysqli_query($BD, $sql);

    $resultado = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $entradas;
}
