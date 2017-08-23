<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Clientes</title>
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
      <a href="../index.html" class="brand-logo">Clientes</a>
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
         <a href="../Empleados/alta.php" class="collection-item  black-text">Empleados</a>
         <a href="../Clientes/alta.php" class=" collection-item  red-text">Clientes</a>
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
            <h6>Nombre del Cliente:</h6>
            <div class="section">
              <div class="input-field col s4">
                <label for="nombre">Nombre(s)</label>
                <input type="text" id="nombre" name="nombre" class="validate" placeholder="Nombre(s)">
              </div>
              <div class="input-field col s4">
                <label for="apellidop">Apellido Paterno</label>
                <input type="text" id="apellidop" name="apellidop" class="validate" placeholder="Apellido Paterno">
              </div>
              <div class="input-field col s4">
                <label for="apellidom">Apellido materno</label>
                <input type="text" id="apellidom" name="apellidom" class="validate" placeholder="Apellido Materno">
              </div>
            </div>
          </div>
          <!--Datos cliente-->
          <div class="divider"></div>
          <div class="row">
            <h6>Datos del cliente:</h6>
            <div class="section">
              <div class="input-field col s6">
                <label class="active" for="telefono">Telefono Local</label>
                <input type="text" id="telefono" name="telefono" class="vaidate" placeholder="Telefono">
              </div><div class="input-field col s6">
                <label class="active" for="telefono2">Telefono celular</label>
                <input type="text" id="telefono2" name="telefono2" class="vaidate" placeholder="Telefono Celular">
              </div>
              <br>
              <div class="input-field col s6">
                <label for="correo_electronico">Correo Electronico</label>
                <input type="text" id="correo_electronico" name="correo_electronico" class="vaidate" placeholder="Correo Electronico">
            </div>
          </div>
          </div>
          <!--Datos del vehiculo--> 
          <div class="divider"></div>
          <div class="row">
            <h6>Datos del vehiculo:</h6>
            <div class="section">
            </div>
              <div class="input-field col s6">
                <label for="tipo">Tipo de Vehiculo</label>
                <input type="text" id="tipo" name="tipo" class="vaidate" placeholder="Tipo de Vehiculo">
              </div>
              <div class="input-field col s6">
                <label for="tipo_servicio">Tipo de Servicio</label>
                <input type="text" id="tipo_servicio" name="tipo_servicio" class="vaidate" placeholder="Tipo de Servicio">
              </div>
              <div class="input-field col s6">
                <label for="factura">Factura</label>
                <input type="text" id="factura" name="factura" class="vaidate" placeholder="Factura">
              </div>
              <div class="input-field col s6">
                <label for="numero_de_chasis">Numero de Chasis</label>
                <input type="text" id="numero_chasis" name="numero_chasis" class="vaidate" placeholder="Numero de Chasis">
              </div>
              <div class="input-field col s6">
                <label for="kilometraje">Kilometraje</label>
                <input type="text" id="kilometraje" name="kilometraje" class="vaidate" placeholder="Kilometraje">
              </div>
              <div class="input-field col s6">
                <label for="fecha_entrada">Fecha de Entrada</label>
                <input type="text" id="fecha_entrada" name="fecha_entrada" class="vaidate" placeholder="dd-mm">
              </div>
              <div class="input-field col s6">
                <label for="fecha_salida">Fecha de Salida</label>
                <input type="text" id="fecha_salida " name="fecha_salida" class="vaidate" placeholder="dd-mm">
              </div>
              <div class="input-field col s6">
                <label for="numero_orden">Numero de orden</label>
                <input type="text" id="numero_orden" name="numero_orden" class="vaidate" placeholder="Numero de orden">
              </div>
              </div>         
 <!--Otros datos-->
          <div class="divider"></div>
          <div class="row">
            <h6>Otros Datos:</h6>
            <div class="section">
            </div>
              <div class="input-field col s6">
                <label for="tipo">Nombre Asesor</label>
                <input type="text" id="nombrea" name="nombrea" class="vaidate" placeholder="Nombre Asesor">
              </div>
              <div class="input-field col s6">
                <label for="tipo_servicio">Nombre Tecnico</label>
                <input type="text" id="nombret" name="nombret" class="vaidate" placeholder="Nombre Tecnico">
             
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