<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/4851LOGOTIPOS.ico">
    <title>Librería y papelería Progreso</title>
</head>
<body>
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
<div class="navbar">
  <a href="bienvenido.php">Inicio</a> 
  <a href="Productos.php">Productos/Servicios</a> 
  <a href="Tineda.php">Tienda</a>
  <a href="Contactenos.php">Contactenos</a>
</div>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}


</style>
<table>
  
  <tr>
    <th>Nonombre</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Mensaje</th>
  </tr>
  
</table>
<?php 
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM mensajes";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $nomensaje = $row['nomensaje'];
	    $nombre = $row['nombre'];
	    $telefono = $row['telefono'];
        $correo = $row['correo'];
	    $mensaje = $row['mensaje'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>NO mensaje: </b> <?php echo $nomensaje ?><br>
        		    <b>Telefono: </b> <?php echo $telefono ?><br>
                    <b>Correo: </b> <?php echo $correo ?><br>
        		    <b>Mensaje: </b> <?php echo $mensaje ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>
</body>
</html>