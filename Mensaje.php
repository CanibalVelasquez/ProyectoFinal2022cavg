<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/4851LOGOTIPOS.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Style3.css">
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
  <a href="Productos.php">Productos/Servicios</a> 
  <a href="Contactenos.php">Contactenos</a>
  <a href="Tienda.php">Tienda</a>
</div>
<br>
<h1>Iniciar Sesión </h1>
<body>
<form action="./ver1.php" method="get" >                    
                    <div class="mb-5 row">
                        <label for="" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese su usuario">                    
                        </div>
                    </div>
                    <div class="mb-5 row">
                        <label for="contrasena" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña">
                        </div>
                    </div>
                    <div class="text-center">
                        <input name="" id="" class="btn btn-primary " type="submit" value="Aceptar" >
                    </div>
                </form>

</body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <br><br><br>
 
</div>  

    </body>
</html>
<footer>
    <table border="0" width="100%" cellpadding="20" cellpacing="5" bgcolor="#01FF00">
      <tr bg color="white"> 
        <td style="color:#E8E8E8">PBX: XXXX-XXXX</td>
        <td style="color:#E8E8E8">DIRECCION: 35 av 21-16 Villa hermosa 2 </td>
        <td style="color:#E8E8E8">CARNET: 2021-40194 </td>
        <td style="color:#E8E8E8">NOMBRE: Cesar Anibal Velasquez Garcia</td>
      </tr>
    </table>
  </footer>