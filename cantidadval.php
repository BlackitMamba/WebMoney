<?php 
include('dbc.php');

session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: formsecurity.php');
    exit();
}

if (isset($_POST['can'])) {
    $cantidad = $_POST['can'];
    $user = $_SESSION['nombre'];
    $sql = "UPDATE datos SET can = '$cantidad' WHERE nombre = '$user'";
    $resultado = mysqli_query($conexion, $sql);
    if (!$resultado) {
        die('Error al actualizar la cantidad: ' . mysqli_error($conexion));
    }
    header('Location: Ok.php');
    
}
?>






