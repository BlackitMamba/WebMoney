<?php
include('dbr.php');
session_start();
// Obtener el ID del usuario a partir de su nombre de usuario
$nombre_usuario = $_SESSION['nombre'];
$sql = "SELECT id FROM datos WHERE nombre = '$nombre_usuario'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $id_usuario = $row["id"];

  // Obtener la cantidad actual de dinero disponible para el usuario
  $sql = "SELECT can FROM datos WHERE id = $id_usuario";
  $result = $conexion->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cantidad_actual = $row["can"];

    // Restar la cantidad que el usuario desea retirar
    $cantidad_retirar = $_POST['retirar'];
    $nueva_cantidad = $cantidad_actual - $cantidad_retirar;

    // Actualizar la cantidad en la tabla
    $sql = "UPDATE datos SET can = $nueva_cantidad WHERE id = $id_usuario";

    if ($conexion->query($sql) === TRUE) {
        header("location:retirar2.html");
    } else {
      echo "Error al actualizar la cantidad de dinero disponible: " . $conexion->error;
    }
  } else {
    echo "No se encontró la cantidad de dinero disponible para el usuario con ID $id_usuario";
  }
} else {
  echo "No se encontró el usuario con nombre de usuario $nombre_usuario";
}

$conexion->close();
?>
