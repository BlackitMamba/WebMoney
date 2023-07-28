<?php
include('dbr.php');
session_start();

// Obtener el ID del usuario que realiza la transferencia a partir de su nombre de usuario
$nombre_usuario = $_SESSION['nombre'];
$sql = "SELECT id, can FROM datos WHERE nombre = '$nombre_usuario'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $id_usuario_origen = $row["id"];
  $cantidad_actual_origen = $row["can"];

  // Restar la cantidad que el usuario desea transferir
  $cantidad_transferir = $_POST['trans'];
  $nueva_cantidad_origen = $cantidad_actual_origen - $cantidad_transferir;

  // Obtener el ID del usuario que recibe la transferencia a partir de su nombre de usuario
  $nombre_usuario_destino = $_POST['nc'];
  $sql = "SELECT id, can FROM datos WHERE nombre = '$nombre_usuario_destino'";
  $result = $conexion->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id_usuario_destino = $row["id"];
    $cantidad_actual_destino = $row["can"];

    // Sumar la cantidad que el usuario desea transferir
    $nueva_cantidad_destino = $cantidad_actual_destino + $cantidad_transferir;

    // Actualizar la cantidad de dinero del usuario que realiza la transferencia en la base de datos
    $sql = "UPDATE datos SET can = $nueva_cantidad_origen WHERE id = $id_usuario_origen";
    if ($conexion->query($sql) !== TRUE) {
      echo "Error al actualizar la cantidad de dinero disponible para el usuario con ID $id_usuario_origen: " . $conexion->error;
      exit();
    }

    // Actualizar la cantidad de dinero del usuario que recibe la transferencia en la base de datos
    $sql = "UPDATE datos SET can = $nueva_cantidad_destino WHERE id = $id_usuario_destino";
    if ($conexion->query($sql) !== TRUE) {
      echo "Error al actualizar la cantidad de dinero disponible para el usuario con ID $id_usuario_destino: " . $conexion->error;
      exit();
    }

    header("location: ct.html");
  } else {
    echo "No se encontró al usuario con nombre de usuario $nombre_usuario_destino";
  }
} else {
  echo "No se encontró al usuario con nombre de usuario $nombre_usuario";
}

$conexion->close();
?>
