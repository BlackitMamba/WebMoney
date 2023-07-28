<?php 
 $Userr = $_POST['nombre'];
 $Passs = $_POST['pass'];
session_start();
$_SESSION['nombre'] = $Userr;

include('db.php');

$consultar = "SELECT*FROM datos where nombre ='$Userr' and pass='$Passs'";
$resultado = mysqli_query($conex,$consultar);

$filas=mysqli_num_rows($resultado);
if ($filas) {
    header("location:homer.php");
}else {
    ?>
    <?php
    include("formlogin.php")
     ?>
     <h1>Error de autentificacion</h1>
     <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);


