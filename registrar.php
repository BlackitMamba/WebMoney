<?php
include("con_db.php");

if (isset($_POST['register'])) {
  if (strlen($_POST['User']) >= 1 && strlen($_POST['Pass']) >= 1) {
    $User = trim($_POST['User']);
    $Pass = trim($_POST['Pass']);
    $consulta = "SELECT COUNT(*) as cuenta FROM datos WHERE nombre = '$User'";
    $resultado = mysqli_query($conex, $consulta);
    if (!$resultado) {
      die("Error al consultar los datos: " . mysqli_error($conex));
    }
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila['cuenta'] > 0) {
      ?>
    <?php
   
     ?>
     <h1>Nombre de usuario ya existe</h1>
     <?php 
    } else {
      $consulta = "INSERT INTO datos(nombre, pass) VALUES ('$User', '$Pass')";
      $resultado = mysqli_query($conex, $consulta);
      if (!$resultado) {
        die("Error al insertar los datos: " . mysqli_error($conex));
      }
      header("Location: men.php");
      exit();
    }
  } else {
    ?>
    <h3>Hubo un error al llenar los campos</h3>
    <?php  
  }
}
?>

