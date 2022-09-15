<!doctype html>
<html lang="es">
<link rel="shortcut icon" type="image/x-icon" href="images/4851LOGOTIPOS.ico">
  <head>
    <title>LABORATORIO No.III</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <br><br><br><br>
      <div class="container-lg">
          <div class="row text-center" >
          <?php
                $usuario = $_REQUEST['usuario'];
                $contrasena = $_REQUEST['contrasena'];

                if( $usuario == 'admin' && $contrasena == '123')
                {
                    header("location:Recibir.php");
                    
                }
                else
                {
                  
                  header("location:Mensaje.php");
                 
                }
          ?>
          </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="row mt-5">
        <div class="text-center">
            <a name="" id="" class="btn btn-primary" href="login.php" role="button">Salir</a>
        </div>            
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>