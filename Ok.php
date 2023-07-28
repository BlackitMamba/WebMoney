<!DOCTYPE html>
<html>
<head>
	<title>WebMoney</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			
			background:linear-gradient(to right,#643047,#4c334d,#353652,#1d3958,#053c5e); 
		}

		.container {
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		h1 {
			-webkit-background-clip: text;
			background-image: linear-gradient(to right, white, rgb(34, 180, 83));
			color: transparent;
			text-shadow:3.5px 3px 8px #14ffff;
			text-align: center;
			margin-bottom: 30px;
		}
    .container span:nth-child(1){
		position: absolute;
        top: 80px;
        left: 0;
        width: 50%;
        height: 3px;
        background: linear-gradient(to right,transparent, lightblue);
        animation: r1 2s linear infinite;
	}
	@keyframes r1 {
		0%{
            transform: translate(-100%);
        }
        100%{
            transform: translate(100%);
        }
	}
	.container span:nth-child(2){
		position: absolute;
        bottom: 50px;
        left: 0;
        width: 50%;
        height: 3px;
        background: linear-gradient(to right,transparent, rgb(255, 25, 44));
        animation: r2 2s linear infinite;
	}
	@keyframes r2 {
		0%{
            transform: translate(-100%);
        }
        100%{
            transform: translate(100%);
        }
	}
	
		.box {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 200px;
			height: 200px;
			margin: 0 20px;
			border-radius: 10px;
			font-size: 30px;
			font-weight: bold;
			text-align: center;
			color: #fff;
			cursor: pointer;
			transition: all 0.3s ease;
		
		}

		.box-retira {
			border: groove 5px rgb(42, 164, 204);
			background-image: linear-gradient(45deg, #2c2c2c, #2c3d52);
			transition: all 0.5s ease;
			box-shadow: rgba(46, 185, 240, 0.4) 5px 5px, rgba(46, 179, 240, 0.3) 10px 10px, rgba(13, 227, 255, 0.2) 15px 15px, rgba(1, 247, 255, 0.1) 20px 20px, rgba(9, 255, 243, 0.05) 25px 25px;
		}
		.box-retira:hover {
			background-image: linear-gradient(45deg, #aecaee, #fcfdfe);
			color: #000;
			border: groove 9px rgb(103, 211, 247);
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
		}
		.box-transaccion {
			border: groove 5px #22bb62;
			background-image: linear-gradient(45deg,#2a2d30, #15452f);
			transition: all 0.5s ease;
			box-shadow: rgba(46, 240, 46, 0.4) 5px 5px, rgba(46, 240, 46, 0.3) 10px 10px, rgba(69, 255, 13, 0.2)15px 15px, rgba(60, 255, 1, 0.1) 20px 20px, rgba(120, 255, 9, 0.05) 25px 25px;
		}
        .box-transaccion:hover {
			background-image: linear-gradient(45deg,#bbc5ca,#a0ffbf);
			color: #000;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
			border: groove 9px #22bb62;
		}
        .box-regresar {
			border: groove 5px rgb(204, 107, 17);
			background-image: linear-gradient(45deg,#2a2d30,#fffd93);
			transition: all 0.5s ease;
			box-shadow: rgba(240, 237, 46, 0.4) 5px 5px, rgba(240, 221, 46, 0.3) 10px 10px, rgba(255, 219, 13, 0.2) 15px 15px, rgba(238, 255, 1, 0.1) 20px 20px, rgba(255, 251, 9, 0.05) 25px 25px;
		}
		.box-regresar:hover {
			background-image: linear-gradient(45deg,#fcfcfc,rgb(255, 165, 165));
			color: #000;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
			border: groove 9px rgb(204, 107, 17);
		}

		.box:hover{
			background-color: #fff;
			
			
		}
a{
	text-decoration:none;
}

	</style>
</head>
<body>
	<div class="container">
		<span></span>
		<span></span>
		<h1>Que deseas hacer con es cantidad de dinero?</h1>
		
		<br>
		<a href="retirar.php"><div class="box box-retira">
			 Retira
		</div></a> 
		<a href="tcion.php"><div class="box box-transaccion">
			Transacción
		</div></a> 
        <a href="homer.php"><div class="box box-regresar">
			Regresar al menu
		</div></a> 
		
	</div>
</body>
</html>

