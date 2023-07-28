
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
      *{
        margin: 0;
        padding: 0;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(to right, #5e60ce,#5390d9,#4ea8de,#48bfe3);
    }
    .container{

        background: rgba(233, 233, 233, 0.589);
        -webkit-backdrop-filter: blur(5px);
        border: 3px solid white;
        width: 500px;
        margin: 50px auto;
        padding: 20px;
        overflow: hidden;
        opacity: .8;
       transition: all 0.3s ease;
       border-radius: 5%;
       box-shadow: rgba(0, 0, 0, 0.514) 0px 7px 29px 0px;
    }
    .container:hover{
        opacity: 1;
        width: 550px;
        height: 500px;
        box-shadow: rgba(0, 0, 0, 0.877) 0px 5px 15px;

    }
    h2 {
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
        background-color: lightblue;
        cursor: text;
        font-style: inherit;
    }
    
    input[type="submit"],.xd {
        text-decoration: none;
        background:#3a3dff3f;
        backdrop-filter: blur(5px);
        border: none;
        color: #000000;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        transition: background-color 0.5s ease;
    }
    
    input[type="submit"]:hover,.xd:hover {
        background:rgb(140, 140, 228);
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
.box{
  position: relative;
}
.box .square {
    position: absolute;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50px;
  
}

.box .square:nth-child(1) {
    top: -15rem;left: 60rem;
    width: 100px; height: 100px;
    z-index: 3;
    transition: all 0.3s ease;
}
.box .square:nth-child(2) {
    top: 150px; left: 25rem;
    width: 100px; height: 100px;
    z-index: 2;
    transition: all 0.3s ease;

}
.box .square:nth-child(3) {
    top: 190px; left: 28rem;
    width: 90px; height: 90px;
    z-index: 3;
    transition: all 0.3s ease;
}
.square:nth-child(1):hover {
   
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.616);
    background: rgba(245, 94, 94, 0.527);
    width: 110px; height: 110px;
  
}
.square:nth-child(2):hover {
 
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.616);
    background: rgba(235, 245, 94, 0.527);
    width: 110px; height: 110px;
  
}
.square:nth-child(3):hover {
  
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.616);
    background: rgba(152, 94, 245, 0.527);
    width: 100px; height: 100px;
  
}
    </style>
  </head>
  <body>
    <div class="box">
      <div class="square" style="--i:0;"></div>
      <div class="square" style="--i:1;"></div>
      <div class="square" style="--i:2;"></div>
    </div>
    <div class="container">
      <form action="validarr.php" method="post" id="login-form">
        <h2>Iniciar sesión</h2>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="nombre"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="pass"><br>
        <input type="submit" value="Login">
        <a class="xd" href="men.php">Regresar</a>
      </form>
    </div>
    
  </body>
</html>
