<?php

include('db.php');

$USUARIO= $_POST['User'];
$PASSWORD = $_POST ['Pass'];

$consulta = "SELECT* FROM personal where User = '$USUARIO' and Pass = '$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas){
    header("location:home.html");
}else{
    include("form.html");
    ?>
    <h1>Error de autentificacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);



?>