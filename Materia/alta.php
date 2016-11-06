<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Alta de Materia</title>
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
      <a href="../index.html" class="brand-logo">Materia</a>
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
         <!--Datos geerales-->
          <div class="divider"></div>
          <div class="row">
            <div class="section">
              <div class="input-field col s6">
                <label for="clave_materia">Clave de la materia</label>
                <input type="text" id="clave_materia" name="clave_materia" class="validate" placeholder="308226067" autofocus="autofocus">
              </div>
              <div class="input-field col s6">
                <label for="carrera" class="active">Carrera</label>
                <select name="carrera" id="carrera">
                  <option value="" disabled selected>Seleccione una opción</option>
                  <option value="Ingeniería en Tecnologías de la Informacíon y Comunicación">Ingeniería en Tecnologías de la informacíon y comunicación</option>
                  <option value="Ingeniería en Gestión Empresarial">Ingeniería en Gestión Empresarial</option>
                  <option value="Ingeniería en Logístca">Ingeniería en Logístca</option>
                  <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                  <option value="Ingeniería Ambiental">Ingeniería Ambiental</option>
                </select>
              </div>
              <div class="input-field col s6">
                <label for="nombre">Nombre(s)</label>
                <input type="text" id="nombre" name="nombre" class="validate" placeholder="Liderazgo">
              </div>
              <div class="input-field col s6">
                <label for="horario">Horario</label>
                <input type="text" id="horario" name="horario" class="validate" placeholder="15:00-17:00" autofocus="autofocus">
              </div>
              <div class="input-field col s6">
                <label for="turno">Turno</label>
                <input type="text" id="turno" name="turno" class="validate" placeholder="Vespertino">
              </div>
              <div class="input-field col s6">
                <label for="semestre" class="active">Semestre</label>
                <!--input type="text" id="semestre" name="semestre" class="validate" placeholder="9°"-->
                <select name="semestre" id="semestre">
                  <option value="" disabled selected>Seleccione una opción</option>
                  <option value="1">Semestre 1</option>
                  <option value="2">Semestre 2</option>
                  <option value="3">Semestre 3</option>
                  <option value="4">Semestre 4</option>
                  <option value="5">Semestre 5</option>
                  <option value="6">Semestre 6</option>
                  <option value="7">Semestre 7</option>
                  <option value="8">Semestre 8</option>
                  <option value="9">Semestre 9</option>
                  <option value="10">Semestre 10</option>
                </select>
              </div>
              <div class="input-field col s6">
                <label for="horas_semanales">Horas Semanales</label>
                <input type="text" id="horas_semanales" name="horas_semanales" class="validate" placeholder="4">
              </div>
              <div class="input-field col s6">
                <label for="horas_totales">Horas Totales</label>
                <input type="text" id="horas_totales" name="horas_totales" class="validate" placeholder="240">
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