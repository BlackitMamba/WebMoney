<!DOCTYPE html>
<html>
<head>
	<title>WebHome</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background: linear-gradient(to right, #272727, #2b2b33,#263142);
		}

		header {
			background:  #001f4d56;
			backdrop-filter: blur(5px);
			height: 70px;
			position: fixed;
			top: 10px;
			left: 20px;
			right: 20px;
			transition:all 0.3s ease;
			box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
			border-radius: 10px;
			z-index: 3;
		}

		nav {
			float: left;
			margin: 0;
			padding: 0;
		}

		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		nav li {
			display: inline-block;
			margin-right: 50px;
			text-align:center;
			transition: all 0.5s ease;
		}

		nav a {
			
			display: block;
			color: #fff;
			font-family:900;
			font-size: 15px;
			line-height: 50px;
			padding: 0 10px;
			font-weight: 800;
			text-decoration: none;
			transition: all 0.5s ease;
			
		}
       nav a:hover{
		background-image: linear-gradient(45deg, #f7a1ff, #4c31e7, #a5e2ff);
		color: transparent;
		-webkit-background-clip: text;
	   }
		nav li:hover {
			background-color: #4a5eb6;
			color:#000;
			border-radius: 10px;
			
		}

		.main-content {
			margin-top: 100px;
			margin-left: -15px;
			margin-right: 20px;
			padding: 0 20px;
			box-sizing: border-box;
		}

		img {
			width: 800px;
			height: 800px;
			margin-left: 20px;
			box-shadow:15px 5px 10px #101013;
			box-shadow: rgba(130, 46, 240, 0.4) 5px 5px, rgba(137, 46, 240, 0.3) 10px 10px, rgba(162, 46, 240, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
			transition:all 0.3s ease;
			
		}
		img:hover{
			width: 830px;
			height: 800px;
			margin-left: 20px;
			box-shadow:15px 5px 15px #101013;
			
		}

		aside {
		
			float: right;
			width: 500px;
			height: 800px;
			background-color: #23222e;
			padding: 20px;
			box-sizing: border-box;
			margin-left: 20px;
			border-radius: 10px;
			box-shadow: rgba(130, 46, 240, 0.4) 5px 5px, rgba(137, 46, 240, 0.3) 10px 10px, rgba(162, 46, 240, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
			transition: all 0.3s ease;
		}
		aside:hover {
		
			float: right;
			width: 505px;
			height: 805px;
			background-color: #242238;
			padding: 20px;
			box-sizing: border-box;
			margin-left: 20px;
			box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
		}

		aside h2 {
			background-image: linear-gradient(to right, #f43b47, #453a94);
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  color: transparent;
			text-align:center;
			
			font-size: 24px;
			margin-top: 100px;
			font-size: 60px;
		}

		aside p {
			color: white;
			text-align:center;
			font-size: 30px;
			line-height: 1.5;
		}

		footer{
			text-align:center;
			float: right;
			width: 100%;
			color:white;
			font-size: 75px;
			background-color: #000;
			padding: 20px;
			box-sizing: border-box;
			left: 20px;
			margin-top: 50px;
			
		}

		.boton{
			height:15%;
			font-size:20px;
			background-image: linear-gradient(45deg, #3b17ae, #9617ae);
			border-radius: 5px;
			display:flex;
			justify-content: center;
			text-align:center;
			margin-left:60px;
			margin-right:60px;
			transition: all 0.3s ease;
			color:white;
		}
.boton:hover{
	background-image: linear-gradient(45deg, #644eda, #4e8eda);
  box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.5); 
  color: #fff;
	
}
a{
	text-decoration:none;
}



footer{
	opacity: .8;
	border-radius: 10px;
	box-shadow: rgba(130, 46, 240, 0.4) 5px 5px, rgba(137, 46, 240, 0.3) 10px 10px, rgba(162, 46, 240, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
	background-image: linear-gradient(45deg, #000000, #2a2a2a,#515151);
	transition:all 0.5s ease;
}

footer:hover{

	opacity: 1;
	border-radius: 10px;
	box-shadow:20px 5px 10px #101013;
	background-image: linear-gradient(45deg, #000000, #2a2a2a,#515151);
}
#play-button {
			background-image: linear-gradient(45deg, #251252, #3f2ce9, #14c8ff);
			color: white;
			font-size: 20px;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			position: fixed;
			bottom:20px;;
			left: 20px;
			z-index: 999;
			transition: all 0.3s ease;
		}

		#play-button:hover {
			background-color: #1f639b;
			color: black;
			width: 230px;
			height: 50px;
		
		}
	</style>
    
</head>
<body>
<button id="play-button">Reproducir musica</button>
	<header>
	
		<nav>
			<ul>
				<li class="h"><a href="homer.php">Inicio</a></li>
				<li class="s"><a href="formsecurity.php">Ingresar cantidad de la tarjeta</a></li>
				<li class="v"><a href="Ok.php">Retirar o transferir</a></li>
				
				<li class="n"><a href="consulta.php">Consultar cuenta y dinero</a></li>
				<li class="m"><a href="juegos.html">Juegos</a></li>
				<li class="m"><a href="iamonica.html">Monica AI</a></li>
				<li class="b"><a href="men.php">Cerrar sesión</a></li>
			</ul>
		</nav>
	</header>

	<div class="main-content">
		<img src="Diseño sin título.png" alt="Imagen de muestra">
		
		<aside>
			<h2>Contacto</h2>
			<p>Teléfono: 5032-7841</p>
			<p>Correo: webmoneyx.com</p>
			<a href="mailto:175jasmb2a@miguelgalvez.edu.gt"><div class="boton"><p>Contacto Directo</p></div></a>
		</aside>
		<footer>@webmoneyx</footer>
	</div>
	<script>
		const audio = new Audio('m3.mp3');
const playButton = document.getElementById('play-button');

playButton.addEventListener('click', function() {
  audio.play();
});

playButton.addEventListener('dblclick', function() {
  audio.pause();
});

	</script>
</body>
</html>

