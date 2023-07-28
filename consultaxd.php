<?php
include('dbr.php');
session_start();

if (!isset($_SESSION['nombre'])) {
    header('Location: homer.php');
    exit();
}

$nombre_usuario = $_SESSION['nombre'];

// Obtener el ID del usuario a partir de su nombre de usuario
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
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Cantidad disponible</title>
            <style>
                body {
                    background: linear-gradient(to right, #280000, #570000,#b10f2e);
                }

                .container {
                    background-image: linear-gradient(45deg, #ef3c2d,#f26a4f,#f29479);
                    padding: 20px;
                    width: 60%;
                    margin: auto;
                    margin-top: 50px;
                    border-radius: 10px;
                    border-top: 5px groove #a4161a;
                    border-bottom: 5px groove #ba181b;
                    border-left: 5px groove #660708;
                    border-right: 5px groove #370617;
                    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
                }

                h1 {
                    background-image: linear-gradient(to left, #48392a,#43281c, #c06e52);
                    color: transparent;
                    text-align: center;
                    -webkit-background-clip: text;
                }

                p {
                    color: white;
                    text-shadow: 2px 2px 5px rgb(12, 12, 12);
                    font-size: 50px;
                    text-align: center;
                }

                button {
                    background-color: rgb(99, 56, 66);
                    border: none;
                    color: white;
                    padding: 10px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 10px;
                    cursor: pointer;
                    border-radius: 5px;
                    transition: all 0.3s ease;
                }

                button:hover {
                    background-color: white;
                    color: purple;
                }
            </style>
        </head>
        <body>
        <div class="container">
            <h1>Cantidad disponible</h1>
            <p>La cantidad de dinero disponible es: <?php echo $cantidad_actual; ?></p>
            <a href="homer.php"><button>Regresar al menú</button></a>
        </div>
        </body>
        </html>

        <?php
    } else {
        echo "No se encontró la cantidad de dinero disponible para el usuario con ID $id_usuario";
    }
} else {
    echo "No se encontró el usuario con nombre de usuario $nombre_usuario";
}

$conexion->close();
?>

