<!DOCTYPE html>
<html>
<head>
	<title>Formulario WM</title>
	<style>
		body {
			background-color: #472a75;
			font-family: Arial, sans-serif;
			font-size: 16px;
			margin: 0;
			padding: 0;
		}

		.container {
			width: 500px;
			margin: 50px auto;
			background-color: #fff;
			border: 1px solid #ddd;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
		}

		h1 {
			margin: 0;
			padding: 0;
			text-align: center;
			font-size: 32px;
			color: #333;
		}

		form {
			margin-top: 30px;
		}

		label {
			display: block;
			margin-bottom: 10px;
			color: #555;
			font-size: 18px;
			font-weight: bold;
		}

		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid #ddd;
			margin-bottom: 20px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #7244a7;
			border: none;
			color: #fff;
			padding: 10px 20px;
			font-size: 18px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		input[type="submit"]:hover {
			background-color: #472a75;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Iniciar Sesión</h1>
        <form action="validar.php" method="post">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="User" name="User" required>
    
            <label for="password">Contraseña:</label>
            <input type="password" id="Pass" name="Pass" required>
    
            <input type="submit" value="Ingresar">
  </form>
	</div>
</body>
</html>
