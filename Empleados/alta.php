<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Empleados</title>
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
 <!-- Navbar goes here -->
 <nav>
    <div class="nav-wrapper red accent-4 z-depth-1">
      <a href="../index.html" class="brand-logo">Empleados</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="alta.php">Alta</a></li>
        <li><a href="baja.php">Baja</a></li>
      </ul>
    </div>
  </nav>
    <!-- Page Layout here -->
    <div class="row">
      <div class="col s3">
        <!-- Grey navigation panel -->
        <div class="collection center-align z-depth-1">
         <a href="../Empleados/alta.php" class="collection-item  red-text">Empleados</a>
         <a href="../Clientes/alta.php" class=" collection-item  black-text">Clientes</a>
         <a href="../Encuesta de Calidad/alta.php" class=" collection-item  black-text">Encuesta de Calidad</a>
        </div>
      </div>
      <div class="col s9 padding">
        <!-- Teal page content  -->
        <h5>Introduzca los datos requeridos:</h5>
        <form action="insertar.php" id="form1" name="form1" method="post" enctype="multipart/form-data">
        
          <!--Nombre completo-->
          <div class="divider"></div>
            <div class="row">
            <h6>Nombre del Empleado:</h6>
            <div class="section">
              <div class="input-field col s4">
                <label for="nombree">Nombre(s)</label>
                <input type="text" id="nombree" name="nombree" class="validate" placeholder="Nombre(s)">
              </div>
              <div class="input-field col s4">
                <label for="apellidopa">Apellido Paterno</label>
                <input type="text" id="apellidopa" name="apellidopa" class="validate" placeholder="Apellido Paterno">
              </div>
              <div class="input-field col s4">
                <label for="apellidoma">Apellido materno</label>
                <input type="text" id="apellidoma" name="apellidoma" class="validate" placeholder="Apellido Materno">
              </div>
            </div>
          </div>
          <!--Datos cliente-->
          <div class="divider"></div>
          <div class="row">
            <h6>Datos del empleado:</h6>
            <div class="section">
              <div class="input-field col s6">
                <label class="active" for="puesto">Puesto</label>
                <input type="text" id="puesto" name="puesto" class="vaidate" placeholder="Puesto">
              </div>
              <div class="input-field col s6">
                <label for="correo_electronicoe">Correo Electronico</label>
                <input type="text" id="correo_electronicoe" name="correo_electronicoe" class="vaidate" placeholder="Correo Electronico">
            </div>
          </div>
          </div> 
          <!--Botón-->
          <div class="divider"></div>
          <div class="row">
            <div class="section">
              <div class="col s3 offset-s9">
                <button type="submit" class="btn waves-effect waves-light red accent-4" name="action">Guardar<i class="material-icons right">save</i></button>

              </div>
            </div>
          </div>
        </form> 
    </div>
    </div>
</form>
</div>
</div>
</body>
</html>
    <!--Final del ROW-->
        <footer class="page-footer red accent-4">
            <div class="container">
            <br>
            </div>
        </footer>
</body>
</html>