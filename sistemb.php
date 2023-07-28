<!DOCTYPE html>
<html>
  <head>
    <title>WebMoney</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
      #principal {
  text-align: center;
  margin-top: 100px;
  
}
#logo {
  text-align: center;
  margin-top: 100px;
  
}
*{
  font-family: monaco, Consolas, "Lucida Console", monospace; font-size: 100px; font-style: normal; font-variant: small-caps; font-weight: 700; line-height: 26.4px; } h3 { font-family: monaco, Consolas, "Lucida Console", monospace; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } p { font-family: monaco, Consolas, "Lucida Console", monospace; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: monaco, Consolas, "Lucida Console", monospace; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: monaco, Consolas, "Lucida Console", monospace; font-size: 45px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18.5714px;
        font-family: monaco,Consolas,Lucida Console,monospace; 
            font-size:45px;
}

body{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: cadetblue;
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

#boton-entrar {
  background-color: black;
  color: #00BFFF;
  transition:color 0.3s ease;
  transition: all 0.5s ease;
}

#boton-entrar:hover {
  color: purple;
  background-color:white;
  
}
button {
  font-size: 40px;
}

img {
  height: 100px;
  text-align: center;
        margin-top: 100px;
      
}
video {
			position: fixed;
			top: 50%;
			left: 50%;
			min-width: 100%;
			min-height: 100%;
			width: auto;
			height: auto;
			z-index: -1;
			transform: translateX(-50%) translateY(-50%);
			background: url(poster.jpg) no-repeat;
			background-size: cover;
		}

    #play-button {
  background-color: #2196F3;
  color: white;
  font-size: 20px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  top: 50%;
  transition: all 0.3s ease;
}
#play-button {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: 999;
}

#play-button:hover {
  background-color: #1f639b;
  color: black;
  width:250px;
  height: 70px;
  font-size: 40px;
}

#play-button.active {
  background-color: red;
}

    </style>
  </head>
  <body>
  <video autoplay loop muted>
		<source src="level.mp4" type="video/mp4">
	</video>


	<button id="play-button" onclick="toggleMusic()">Reproducir musica</button>
    <div id="principal">
      <h1>Web Money</h1>
      <button id="boton-entrar" onclick="redirigir()">Entrar</button>
    </div>
    


    <div id="animacion" style="display:none;">
      <h2>Cargando</h2>
    
      
    </div>
    <div>

    </div>

    <script>

var boton = document.getElementById('boton-entrar');
var animacion = document.getElementById('animacion');



function redirigir() {
  boton.addEventListener('click', function() {
  animacion.style.display = 'block';
  principal.style.display = 'none';
  windows.location.href = "men.php";
});
  
} 
const audio = new Audio('m.mp3');
const playButton = document.getElementById('play-button');

playButton.addEventListener('click', function() {
 
  audio.play();
});
var playiButton = document.getElementById("play-button");

function toggleMusic() {
  if (playButton.classList.contains("active")) {
    // Si el botón está activado, desactívalo y detén la música
    playButton.classList.remove("active");
    music.pause();
  } else {
    // Si el botón está desactivado, actívalo y reproduce la música
    playButton.classList.add("active");
    audio.play();
  }
}

    </script>
    <script src="https://kit.fontawesome.com/89c17d7e82.js" crossorigin="anonymous"></script>
  </body>
</html>

  