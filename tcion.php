<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebMoney</title>
</head>
<style>
 body{
    background: linear-gradient(to right, #fec5bb,#fcd5ce,#fae1dd,#f8edeb,#ffd7ba,#ffe5d9,#ece4db,#fec89a);
    display: flex;
    justify-content: center;
   margin-top: 12%;
 }
 .h{
  background: rgba(255, 255, 255, 0.452);
  -webkit-backdrop-filter: blur(50%);
    height:400px;
    width: 60%;
  
    border-radius: 50px;
 
    border: 2px solid rgb(255, 255, 255);
    opacity: .8;
    transition: all 0.5s ease;
 }
 form{
  margin-top: 30px;
        overflow: hidden;
 }
 .h:hover{
 
    height:430px;
    width: 63%;
    
   
    opacity: 1;
 }
 form:hover label{
 margin-left: 25px;
    margin-right: 25px;
    font-size: 40px;  
    background-image: linear-gradient(to right, rgb(9, 0, 128), rgb(192, 230, 255), red);
    color: transparent; 
    -webkit-background-clip: text;
 }
 label{
    margin-left: 25px;
    margin-right: 25px;
    font-size: 40px;  
    background-image: linear-gradient(to right, rgb(255, 200, 19),rgb(226, 96, 20), red);
    color: transparent; 
    -webkit-background-clip: text;
 }
 input{
    border-radius: 10px;
    margin-left: 25px;
    margin-right: 25px;
    font-size: 45px;
    margin-top: 25px;
    transition: all 0.3s ease;
 }
 .r{
  background-image: linear-gradient(45deg, rgb(199, 150, 150),rgb(148, 50, 65));
    margin-left: 25px;
    margin-right: 25px;
    margin-top: 25px;
    
 }

 .r:hover{
  cursor: grab;
    
 }


a{
    background-color: rgb(255, 131, 59);
    text-decoration: none;
    color: rgb(255, 255, 255);
    height: 20px;
    width: 20px;
    font-size: 30px;
    border-radius: 6px;
    margin-top: 20px;
    margin-left: 20px;
    transition: all 0.5s ease;
}
a:hover{
    background-color: rgb(22, 36, 117);
}


form:hover input[type="number"]:hover,input[type="text"]:hover{
  color: aliceblue;
  border:1px solid rgb(5, 5, 5);
  background-image: linear-gradient(45deg, #000000,rgb(255, 246, 227));
}
input{
  color: aliceblue;
  border: none;
  border-radius: 50px;
  background: rgb(209, 209, 209);
  transition: all 0.5s ease;
}
.success-message {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    z-index: 999;
}

</style>
<body>  
  <div class="h">
    <form action="trs.php" method="post">
        <a href="Ok.php">Regresar</a> <br>
        <label for="nombre">Cuanto desea tranferir?:</label>
        <input type="number" id="trans" name="trans" placeholder="Ingrese cantidad"><br>
        <label for="nombre">Ingrese el usuario de la persona a tranferir</label>
        <input type="text" id="nc" name="nc" placeholder="Ingrese el name del usuario"><br>
        <input type="submit" value="tranferir" class="r">
       
    </form>
  </div>
</body>
</html>
