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
    background: linear-gradient(45deg,#dab6fc,#cbb2fe,#bbadff);
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
    background-image: linear-gradient(to right, rgb(9, 0, 128), rgb(77, 110, 133), red);
    color: transparent; 
    -webkit-background-clip: text;
 }
 label{
    margin-left: 25px;
    margin-right: 25px;
    font-size: 40px;  
    background-image: linear-gradient(to right, rgb(38, 0, 128), rgb(45, 47, 129), rgba(255, 0, 0, 0.719));
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
    background-color: rgb(169, 110, 187);
    text-decoration: none;
    color: rgb(255, 255, 255);
    height: 20px;
    width: 20px;
    font-size: 30px;
    border-radius: 10px;
    margin-top: 20px;
    margin-left: 20px;
    transition: all 0.5s ease;
}
a:hover{
    background-color: rgb(52, 33, 56);
}


form:hover input[type="number"]{
  color: rgb(0, 0, 0);
  
  background: #bbadff;
}
input{
  color: aliceblue;
  border-radius: 50px;
  border: none;
  background: white;
 
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
<div id="mensaje">

</div>
<div class="h">
    <form action="retirarph.php" method="POST">
    <a href="Ok.php" class="e">Regresar</a> <br>
        <label for="nombre">Ingrese la cantidad que desea retirar:</label>
        <input type="number" id="retirar" name="retirar"><br>
        <input type="submit" value="Retirar" class="r" onclick="closeSuccessMessage()">
       
    </form>
  </div>
    <div class="success-message">
    <p>Su compra ha sido procesada con éxito.</p>
    <button onclick="closeSuccessMessage()">Cerrar</button>
</div>

<script>
  // Obtener la referencia al formulario
  const form = document.querySelector('form');
  
  // Agregar un event listener para el evento submit del formulario
  form.addEventListener('submit', event => {
    const amount = parseInt(document.querySelector('#retirar').value);
    
    // Verificar si la cantidad ingresada es mayor que 4000
    if (amount > 4000) {
      event.preventDefault(); // Prevenir que el formulario sea enviado
      alert('No puede retirar o transferir más de 4000 de dinero');
    }
  });
</script>

</body>
</html>
