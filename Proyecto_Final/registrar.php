<?php

include("con_db.php");

if (isset($_POST['registro'])) {
  if (strlen($_POST['name'])>=1 &&  
     strlen($_POST['telefono'])>=1 &&
     strlen($_POST['correo'])>=1 &&
     strlen($_POST['mensajes']) ){

$name = trim ($_POST ['name']); 
$telefono = trim ($_POST['telefono']);
$correo = trim ($_POST['correo']);
$mensaje = trim ($_POST['mensajes']); 
$consult = "INSERT INTO mensajes (nombre, telefono, correo, mensaje)
 VALUES ('$name','$telefono','$correo','$mensaje')";
$result = mysqli_query($conex, $consult);
if ($result){
    ?>
    <h2 class="ok">Mensaje enviado</h2>
    <?php
} else {
    ?>
     <h2 class="bat">Ha ocurrido un error</h2>
    <?php
}

    } else  {
        ?>
         <h2 class="bat">Aspectos no completados</h2>
        <?php


}
}
?>