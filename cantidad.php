<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebMoney</title>
    <style>



      

body{
  
  display:flex;
            justify-content:center;
  background: linear-gradient(to right, #191528, #3c162f,#5c162e);
  margin-top: 15%;
  display:flex;
  justify-content: center;
}
form {
  background-color: #110e1b;
  border-top-style:inset;
  border-top-color: #c50264;

  border-bottom-style:inset;
  box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
  border-bottom-color: #5c162e;
  padding: 20px;
  max-width: 900px;
  margin: 0 auto;
  width: 900px;
  height: 230px;
 transition: all 0.5s ease;

}
form:hover {
  background-color: #11001c;
  border-top-style:inset;
  border-top-color: #35007a;
  border-bottom-style:inset;
  border-bottom-color: #68007a;
  width: 900px;
  height: 230px;
  color: yellow;
}
form:hover label{
  font-size: 35px;
  display: block;
  margin-bottom: 10px;
  color: transparent;

  background-image: linear-gradient(to right, rgb(232, 255, 100),rgb(206, 190, 50));
  -webkit-background-clip: text;
}
label {
  font-size: 35px;
  display: block;
  margin-bottom: 10px;
  color: transparent;

  background-image: linear-gradient(to right, rgb(82, 147, 201), rgb(57, 205, 255));
  -webkit-background-clip: text;
  transition: all 0.3s ease;

}

input[type="number"]{
  width: 95%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
  margin-top: 5px;
  transition: all 0.5s ease;
}

input[type="number"]:hover{
  width: 95%;
  background: #1e1e1f;
  padding: 10px;
  border: 2px solid #ff26db;
  border-radius: 5px;
  margin-bottom: 20px;
  margin-top: 5px;
  color: #94007b;
  font-size: 20px;
}
form:hover input[type="submit"] {
  background-color: #ff8045;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
  
}
form:hover input[type="submit"]:hover {
  background-color: #cc150e;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  color: #282836;
  font-weight: 600;
}
input[type="submit"] {
  background-color: #4c6baf;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;

}




    </style>
</head>
<body>
   
<form method="post" action="cantidadval.php">
  <label for="cantidad">Ingrese la cantidad:</label>
  <input type="number" id="can" name="can" required>
  <input type="submit" value="Ingresar">
</form>

</body>
</html>
