<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Alta de profesores</title>
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
      <a href="../index.html" class="brand-logo">Profesor</a>
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
         <!--Numero de control-->
          <div class="divider"></div>
          <div class="row">
            <div class="section">
              <div class="input-field col s6">
                <label for="no_control">Número de control</label>
                <input type="text" id="no_control" name="no_control" class="validate" placeholder="121130248" autofocus="autofocus">
              </div>
              <div class="input-field col s6">
                <label for="nss">Número de Seguro Social</label>
                <input type="text" id="nss" name="nss" class="validate" placeholder="213881003333">
              </div>
            </div>
          </div>
          <!--Nombre completo-->
          <div class="divider"></div>
            <div class="row">
            <h6>Nombre:</h6>
            <div class="section">
              <div class="input-field col s4">
                <label for="nombre">Nombre(s)</label>
                <input type="text" id="nombre" name="nombre" class="validate" placeholder="Jorge Eduardo">
              </div>
              <div class="input-field col s4">
                <label for="apellidop">Apellido paterno</label>
                <input type="text" id="apellidop" name="apellidop" class="validate" placeholder="Ocampo">
              </div>
              <div class="input-field col s4">
                <label for="apellidom">Apellido materno</label>
                <input type="text" id="apellidom" name="apellidom" class="validate" placeholder="Lagunas">
              </div>
            </div>
          </div>
          <!--Dirección-->
          <div class="divider"></div>
          <div class="row">
            <h6>Dirección</h6>
            <div class="section">
              <div class = "input-field col s6">
                <label for="calle">Calle y número</label>
                <input type="text" id="calle" name="calle" class="validate" placeholder="Valle del Misisipi no. 151">
              </div>
              <div class = "input-field col s6">
                <label for="colonia">Colonia</label>
                <input type="text" id="colonia" name="colonia" class="validate" placeholder="Valle de Aragón">
              </div>
              <div class = "input-field col s6">
                <label for="delegacion">Delegación o municipio</label>
                <input type="text" id="delegacion" name="delegacion" class="validate" placeholder="Nezahualcóyotl">
              </div>
              <div class = "input-field col s6">
                <label for="entidad">Entidad</label>
                <input type="text" id="entidad" name="entidad" class="validate" placeholder="Estado de México">
              </div>
            </div>
          </div>
          <!--Datos escolares-->
          <div class="divider"></div>
          <div class="row">
            <h6>Datos profesionales:</h6>
            <div class="section">
              <div class="input-field col s6">
                <label for="fecha_ingreso">Fecha de ingreso</label>
                <input type="text" id="fecha_ingreso" name="fecha_ingreso" class="vaidate" placeholder="yyyy-mm-dd">
              </div>
              <div class="input-field col s6">
                <label class="active" for="carrera">Carrera</label>
                <input type="text" id="carrera" name="carrera" class="vaidate" placeholder="Ingeniería en Tecnologias de la información y comunicación">
              </div>
              <br>
              <div class="input-field col s6">
                <label for="nivel_de_estudio">Nivel de estudios</label>
                <input type="text" id="nivel_de_estudio" name="nivel_de_estudio" class="vaidate" placeholder="Maestria">
              </div>
              <div class="input-field col s6">
                <label for="sueldo">Sueldo</label>
                <input type="text" id="sueldo" name="sueldo" class="vaidate" placeholder="4000">
              </div>
              <div class="input-field col s6">
                <label for="tipo_contrato">Tipo de contrato</label>
                <input type="text" id="tipo_contrato" name="tipo_contrato" class="vaidate" placeholder="Honorarios">
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