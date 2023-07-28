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
        background: linear-gradient(to right, #80b918,#55a630,#2b9348, #007f5f);
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
        border-radius: 5%;
        box-shadow: rgba(0, 0, 0, 0.644) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       transition: all 0.3s ease;

    }
    .container:hover{
        opacity: 1;
        width: 550px;
        height: 500px;
        box-shadow: rgba(50, 50, 93, 0.753) 0px 30px 60px -12px, rgba(0, 0, 0, 0.575) 0px 18px 36px -18px;
    }
    h2 {
        background: linear-gradient(to right, #34a0a4, #168aad,#1a759f);
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
        background: linear-gradient(to left, #355070, #6d597a,#b56576);
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
        background-color: rgb(82, 206, 98);
        cursor: text;
        font-style: inherit;
    }
    
    input[type="submit"],.xd {
        text-decoration: none;
        background:linear-gradient(to right,rgb(19, 156, 190),#21c745);
        border: none;
        color: #fff;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        transition: all 0.5s ease;
    }
    
    input[type="submit"]:hover,.xd:hover {
      color: #00ff15;
        background:linear-gradient(to right,#21c745,rgb(10, 148, 141));
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
    <form action="consultaxd.php" method="post">
      <h2>Ingrese sus datos:</h2>
      <label for="username">Username:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="pass" name="pass"><br>
      <input type="submit" value="Login" name="Login">
      <a href="homer.php" class="xd">Regresar</a>
    </form>
    </div>
  </body>
</html>