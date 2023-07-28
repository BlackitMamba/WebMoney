<!DOCTYPE html>
<html>
<head>
	<title>WebMoney</title>
	<style>
body {
			margin: 0;
			padding: 0;
			display: inline-block;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center;
			background: rgb(224, 224, 224);
		}

		.contenedor {
			border-top: 65px solid #4a28aa;
			max-width: 800px;
			width: 100%;
			box-sizing: border-box;
			max-width: 100%;
			height: 10px;
			align-items: start;
		}

		.square {
			margin: 10px;
			width: 200px;
			height: 200px;
			margin-bottom: 20px;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 20px;
		}

		.square a {
			text-decoration: none;
			color: white;
			font-size: 24px;
			font-weight: bold;
			text-align: center;
		}

		.red {
			background-color: #844ac7;
			transition: all 0.3s ease;
		}

		.red:hover {
			width: 250px;
			height: 250px;
			background-color: #b97cff;
		}

		.green {
			transition: all 0.3s ease;
			background-color: #4a28aa;
		}

		.green:hover {
			width: 250px;
			height: 250px;
			background-color: #9067ff;
		}

		.blue {
			transition: all 0.3s ease;
			background-color: rgb(46, 20, 56);
		}

		.blue:hover {
			width: 250px;
			height: 250px;
			background-color: rgb(152, 73, 184);
		}

		.imagenes {
			border-top: 40px solid #4a28aa;
			max-width: 800px;
			width: 100%;
			box-sizing: border-box;
			height: 200px;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: -65px 0 0;
			max-width: 100%;
		}

		.wn {
			height: 100%;
			display: flex;
			justify-content: flex-start;
			align-items: center;
			flex: 1;
		}

		#play-button {
			background-image: linear-gradient(45deg, #251252, #3f2ce9, #14c8ff);
			color: white;
			font-size: 20px;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			position: fixed;
			top: 20px;
			right: 20px;
			z-index: 999;
			transition: all 0.3s ease;
		}

		#play-button:hover {
			background-color: #1f639b;
			color: black;
			width: 250px;
			height: 75px;
			font-size: 30px;
		}
		.menu {
  background-color: #4a28aa;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 60px;
  width: 100%;
}

.menu img {
  height:100px;
  margin-right: 100px;
}

.menu p {
  color: white;
  font-size: 24px;
  font-weight: bold;
  margin: 0;
}
#animacion {
  display: none;
  text-align: center;
  margin-top: 50px;
  font-size: 30px;
  color: rgb(255, 255, 255);
  background-color: black;
  border-radius:10px;
  animation-duration: 5s;
}
@keyframes shake {
  0% { transform: translate(0, 0) rotate(0); }
  10% { transform: translate(-10px, 0) rotate(-5deg); }
  20% { transform: translate(10px, 0) rotate(5deg); }
  30% { transform: translate(-10px, 0) rotate(-5deg); }
  40% { transform: translate(10px, 0) rotate(5deg); }
  50% { transform: translate(-10px, 0) rotate(-5deg); }
  60% { transform: translate(10px, 0) rotate(5deg); }
  70% { transform: translate(-10px, 0) rotate(-5deg); }
  80% { transform: translate(10px, 0) rotate(5deg); }
  90% { transform: translate(-10px, 0) rotate(-5deg); }
  100% { transform: translate(0, 0) rotate(0); }
}

	</style>
	<link rel="icon" type="image/png" href="WebMoney.png">
</head>
<body>
<button id="play-button">Reproducir musica</button>
	
		<div class="menu">
			<img src="WebMoney.png" alt="logo">
			<p>Todo tu esfuerzo está aquí</p>
		  </div>

	
	<div class="square red"><a  class="b"href="formlogin.php">Ingresar un cliente</a></div>
	<div class="square green"><a href="form.php">Crear cliente</a></div>
	<div class="square blue"><a href="info1.html">Información</a></div>
	<div id="animacion" style="display:none;">
      <h2>Cargando</h2>
    </div>+
	<script>
		var boton = document.getElementById('b');
var animacion = document.getElementById('animacion');

boton.addEventListener('click', function() {
  animacion.style.display = 'block';
  principal.style.display = 'none';
});
function redirigir() {
  window.location.href = "formsecuity.php";
}
      
		const audio = new Audio('m2.mp3');
const playButton = document.getElementById('play-button');

playButton.addEventListener('click', function() {
  audio.play();
});
	</script>
</body>
</html>


