<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioR WebMoney</title>
   <style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(to right, #9163cb,#815ac0,#7251b5, #6247aa);
    }
    .container{
        background: rgba(255, 255, 255, 0.664);
        -webkit-backdrop-filter: blur(50%);
        border: 3px solid white;
        width: 500px;
        margin: 50px auto;
        padding: 20px;
        overflow: hidden;
        border-radius: 5%;
        opacity: .8;
       transition: all 0.3s ease;
       box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }
    .container:hover{
        opacity: 1;
        width: 550px;
        height: 560px;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;

    }
    h1 {
        background: linear-gradient(to right, #001219, #005f73,#0a9396);
        margin: 0;
        padding: 0;
        text-align: center;
        font-size: 32px;
        color: transparent;
        -webkit-background-clip: text;
    }
    form {
        margin-top: 30px;
        overflow: hidden;
    }
    
    label {
        background: linear-gradient(to left, #390099, #9e0059,#ff0054);
        display: block;
        margin-bottom: 10px;
        color: transparent;
        font-size: 18px;
        font-weight: bold;
        -webkit-background-clip: text;
    }
    
    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 50px;
        border: none;
        margin-bottom: 20px;
        box-sizing: border-box;
        transition: background-color 0.5s ease;
    }
    input[type="text"]:hover, input[type="password"]:hover {
        background-color: #a171d8;
        cursor: text;
        font-style: inherit;
    }
    
    input[type="submit"],.xd {
        text-decoration: none;
        background:linear-gradient(to right,#a7448e,#7244a7);
        border: none;
        color: #fff;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        transition: background-color 0.5s ease;
    }
    
    input[type="submit"]:hover,.xd:hover {
        background:linear-gradient(to right,#6b1b57,#3f1372);
    }
    .container {
  position: relative;
  width: 500px;
  height: 500px;
}

.container::before {
  content: "";
  position: absolute;
  top: -3px;
  left: -3px;
  right: -3px;
  bottom: -3px;
  border: 3px solid transparent;
  
  animation: rotate 2s linear infinite;
}


input[type="text"], input[type="password"],input[type="submit"],.xd {
  position: relative;
  z-index: 1;
  /* other styles */
}

.container::before {
  content: "";
  position: absolute;
  top: -3px;
  left: -3px;
  right: -3px;
  bottom: -3px;
  border: 3px solid transparent;
  animation: rotate 2s linear infinite;
  z-index: 0;
  /* other styles */
}
   </style>
    
</head>
<body>
<div class="container">
   
	<h1>Registrarse</h1>
    <form action="registrar.php" method="post">
        <span></span>
        <span></span>
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="User" name="User" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="Pass" name="Pass" required>

        <input type="submit" value="Ingresar" name="register">
        <a class="xd"href="men.php">Regresar</a>
        <span></span>
        <span></span>
    </form>
    <?php
    include ("registrar.php");
    ?>
</body>
</html>
