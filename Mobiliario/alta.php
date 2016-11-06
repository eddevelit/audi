<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Alta de mobiliario</title>
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
    <div class="nav-wrapper red lighten-1 z-depth-1">
      <a href="../index.html" class="brand-logo">Mobiliario</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="alta.php">Alta</a></li>
        <li><a href="actualizar.php">Actualización</a></li>
        <li><a href="consultar.php">Consulta</a></li>
        <li><a href="baja.php">Baja</a></li>
      </ul>
    </div>
  </nav>
    <!-- Page Layout here -->
    <div class="row">
      <div class="col s3">
        <!-- Grey navigation panel -->
        <div class="collection center-align z-depth-1">
           <a href="../Alumno/alta.php" class="collection-item">Alumno</a>
         <a href="../Profesor/alta.php" class=" collection-item  grey-text">Profesor</a>
         <a href="../Materia/alta.php" class=" collection-item  grey-text">Materia</a>
         <a href="../Biblioteca/alta.php" class=" collection-item  grey-text">Biblioteca</a>
         <a href="../Mobiliario/alta.php" class=" collection-item  grey-text">Mobiliario</a>
         <a href="../Empleados/alta.php" class=" collection-item  grey-text">Empleados</a>
         <a href="../Departamentos/alta.php" class=" collection-item  grey-text">Departamentos</a>
        </div>
      </div>
      <div class="col s9 padding">
        <!-- Teal page content  -->
        <h5>Introduzca los datos requeridos:</h5>
        <form action="insertar.php" id="form1" name="form1" method="post" enctype="multipart/form-data">
         <!--Datos de Mobiliario-->
          <div class="divider"></div>
          <div class="row">
            <div class="section">
              <div class="input-field col s6">
                <label for="clave">Clave:</label>
                <input type="text" id="clave" name="clave" class="validate" placeholder="121145234" autofocus="autofocus">
              </div>
              <div class="input-field col s6">
                <label for="ubicacion">Ubicación</label>
                <input type="text" id="ubicacion" name="ubicacion" class="validate" placeholder="Salón 3A">
              </div>
              <div class="input-field col s12">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" class="validate" placeholder="Silla de oficina">
              </div>
              <div class="input-field col s6">
                <label for="factura">Factura</label>
                <input type="text" id="factura" name="factura" class="validate" placeholder="F-123">
              </div>
            </div>
          </div>
          <!--Botón-->
          <div class="divider"></div>
          <div class="row">
            <div class="section">
              <div class="col s3 offset-s9">
                <button type="submit" class="btn waves-effect waves-light red lighten-1" name="action">Enviar <i class="material-icons right">send</i></button>
              </div>
            </div>
          </div>
        </form> 
    </div>
    </div><!--Final del ROW-->
        <footer class="page-footer">
            <div class="container">
            © 2016 Eddo
            <br>
            </div>
        </footer>
</body>
</html>