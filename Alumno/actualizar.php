<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
      	<li><a href="actualizar.php">Actualización</a></li>
        <li><a href="consultar.php">Consulta</a></li>
        <li><a href="baja.php">Baja</a></li>	
      </ul>
    </div>
  </nav>
  <!--Empieza el contenido de la página-->
  <div class="row">
    <div class="col s3">
    <!--Panel de navegacion-->
      <div class="collection center-align z-depth-1">
           <a href="../Alumno/alta.php" class="collection-item">Alumno</a>
         <a href="../Profesor/alta.php" class=" collection-item  grey-text">Profesor</a>
         <a href="../Materia/alta.php" class=" collection-item  grey-text">Materia</a>
         <a href="../Biblioteca/alta.php" class=" collection-item  grey-text">Biblioteca</a>
         <a href="../Mobilario/alta.php" class=" collection-item  grey-text">Mobiliario</a>
         <a href="../Empleados/alta.php" class=" collection-item  grey-text">Empleados</a>
         <a href="../Departamentos/alta.php" class=" collection-item  grey-text">Departamentos</a>
        </div>
    </div>
    <div class="col s9">
    <!--Contenido del formulario-->  
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