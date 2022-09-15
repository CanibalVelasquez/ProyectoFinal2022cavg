<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/6539CV.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Librería y papelería Progreso</title>
  </head>
      <style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #17E20AFF;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #187003CF;
}

.navbar a.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>



<div class="navbar">
  
  <a href="bienvenido.php">Inicio</a> 
  <a href="Tienda.php">Tiendas</a> 
  <a href="Contactenos.php">Contactenos</a>
  <a href="Mensaje.php">Ver Mensajes</a>
</div>
<br>
<h1>Contactenos</h1>

<form method="POST">
  <h1>Bienvenido </h1>
  <input type="text" name="name" placeholder="Nombre Completo">
  <input type="num" name="telefono" placeholder="Telefono">
  <input type="email" name="correo" placeholder="Email">
  <input type="text" name="mensajes" placeholder="Mensajes">
  <input type="submit" name= "registro">
  
</form>
<?php
include("registrar.php");
?>


</body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <br><br><br>
 
</div>   
    </body>
</html>