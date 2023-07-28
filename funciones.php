<?php

// Conexión a la base de datos
function conectar() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registro1";

    $conex = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conex) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    return $conex;
}

// Obtener el ID del usuario de la sesión actual
function obtenerIdUsuario() {
    session_start();
    if (isset($_SESSION['id'])) {
        return $_SESSION['id'];
    } else {
        header("Location:Ok.php");
        exit();
    }
}

?>
