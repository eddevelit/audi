<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Baja de alumno</title>
  <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
 <!--Importando jquery en el proyecto-->
  <script type="text/javascript" src="https://.code.jquery.com/jquery-2.1.1.min.js"></script>
  <script tyoe="text/javascript" src="../js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="../js/materialize.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('select').material_select();
    });
  </script>
  <!--Barra de navegacion-->
   <nav>
    <div class="nav-wrapper red lighten-1 z-depth-1">
      <a href="../index.html" class="brand-logo"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="alta.php">Alta</a></li>
        <li><a href="baja.php">Baja</a></li>  
      </ul>
    </div>
  </nav>
  <!--Empieza el contenido de la página-->
  <div class="row">
    <div class="col s3">
    <!--Panel de navegacion-->
      <div class="collection center-align z-depth-1">
         <a href="../Empleados/alta.php" class="collection-item  black-text">Empleados</a>
         <a href="../Clientes/alta.php" class=" collection-item  red-text">Clientes</a>
         <a href="../Encuesta de Calidad/alta.php" class=" collection-item  black-text">Encuesta de Calidad</a>
        </div>
    </div>
    <div class="col s9">
    <!--Contenido del formulario-->  
    <form action="eliminar.php" id="form1" name="form1" method="POST" enctype="multipart/form-data">
     <h5>Introduzca el nombre del registro a eliminar</h5>
    <div class="input-field col s4">
      <label for="nombre">Nombre Cliente</label>
      <input type="text" id="nombre" name="nombre" class="validate" placeholder="Nombre">
    </div>
    <div class="row">
      <div class="section">
        <div class="col s3 offset-s9">
          <button type="submit" class="btn waves-effect waves-light red lighten-1" name="action">Enviar <i class="material-icons right">send</i></button>
        </div>
      </div>
    </div> 
    </form> 
    </div>
    </div>
    </body>
    </html>
  </div><!--Final del ROW-->
  <footer class="page-footer">
      <div class="container">
      
      <br>
      </div>
  </footer>
</body>
</html>