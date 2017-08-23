<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Encuesta de Calidad</title>
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
    <div class="nav-wrapper  red accent-4 z-depth-1">
      <a href="../index.html" class="brand-logo">Encuesta de Calidad</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>
    <!-- Page Layout here -->
    <div class="row">
      <div class="col s3">
        <!-- Grey navigation panel -->
        <div class="collection center-align z-depth-1">
         <a href="../Empleados/alta.php" class="collection-item  black-text">Empleados</a>
         <a href="../Clientes/alta.php" class=" collection-item  black-text">Clientes</a>
         <a href="../Encuesta de Calidad/alta.php" class=" collection-item  red-text">Encuesta de Calidad</a>
        </div>
      </div>
      <div class="col s9 padding">
      <!-- Teal page content  -->
      <br>Cliente</h7>

     <select name="P5">
      <option selected value="0"> Seleccione una opción... </option>
     </select>
      <h7><br>Buenas (tardes, días, noches), tengo el gusto con________________ mi nombre es ________________ le estoy llamando de Audi Center________, ¿Como se encuentra?

      <br>El motivo de mi llamada es porque recientemente trajo su (modelo) con nosotros, queremos saber si pudiera regalarnos unos minutos de su tiempo para hacerle algunas preguntas referentes al servicio prestado por Audi.

      <br>¿Me permitiría unos minutos de su tiempo? 

      <br>Gracias.
      <br>Primero que nada le comento que es una llamada que puede ser grabada con fines de Calidad en el Servicio.</h7>

      <br><p>1.- Con base en su experiencia durante la última visita ¿cuál es su nivel de satisfacción en general con el servicio prestado por “Audi”?</p></h7>

      <select name="P1">
      <option selected value="0"> Seleccione una opción... </option>
         <option value="1">Totalmente Satisfecho</option>
         <option value="2">Muy Satisfecho</option> 
         <option value="3">Satisfecho</option>
         <option value="4">Poco Satisfecho</option> 
         <option value="5">Nada Satisfecho</option> 
      </select>
   
      <br><p>2.- Teniendo en cuenta sus expectativas ¿En qué medida se han cumplido en Audi Center __________ en comparación con otros Talleres o concesionarias?</p></h7>

      <select name="P2">
      <option selected value="0"> Seleccione una opción... </option>
         <option value="1">Mucho mejor</option> 
         <option value="2">Mejor</option> 
         <option value="3">Peor</option>
         <option value="4">Mucho Peor</option> 
         <option value="5">No tiene experiencia</option>
         <option value="6">No hay diferencia</option> 
      </select>

      <br><p>3.- Ha tenido que regresar su auto por la misma reparación?</p></h7>

     <input type="checkbox" value="si" id="si" name="encuesta" checked>
     <label for="si">Si</label>
     <input type="checkbox" value="no" id="no" name="encuesta">
     <label for="no">No</label>
     <br><p>Por que?</p></h7>
      <textarea name="comentarios" rows="10" cols="40" placeholder="Escribe aquí tus comentarios..."></textarea>

      <br><p>4.- Se le ofreció servicio de taxi en el momento de agendar su cita, o por parte de su asesor de servicio al momento de la recepción del auto?</p></h7>

     <input type="checkbox" value="sip" id="sip" name="encuesta" checked>
     <label for="sip">Si</label>
     <input type="checkbox" value="nop" id="nop" name="encuesta">
     <label for="nop">No</label>

     <br><p>5.-Me podría proporcionar su correo?</p></h7>

      <input type="text" id="ce" name="ce" class="vaidate" placeholder="Direccion de correo"> <label for="ar">@</label><select name="P4">
      <option selected value="0"> Seleccione una opción... </option>
         <option value="1">gmail.com</option> 
         <option value="2">yahoo.com.mx</option> 
         <option value="3">live.com</option>
         <option value="4">outlook.com</option> 
         <option value="5">hotmail.com</option>
      </select>

     <br><p>6.- En unos días estará recibiendo una encuesta vía mail por parte de ADM ¿Sería posible que nos apoyara respondiéndola con el fin de mejorar nuestros procesos?</p></h7>

     <input type="checkbox" value="sip2" id="sip2" name="encuesta" checked>
     <label for="sip2">Si</label>
     <input type="checkbox" value="nop2" id="nop2" name="encuesta">
     <label for="nop2">No</label>

     <br><p>7.- Clasificacion de la queja</p></h7>

     <select name="P3">
      <option selected value="0"> Seleccione una opción... </option>
         <option value="1">Mala reparacion</option> 
         <option value="2">Falta de refaccioones</option> 
         <option value="3">Cliente especial</option>
         <option value="4">Atencion al cliente</option> 
         <option value="5">Tiempo en reparacion</option>
         <option value="5">Regreso por otra falla</option>
      </select>

      <br><p>8.- Por último desea agregar algún comentario?</p></h7>

       <textarea name="comentarios" rows="10" cols="40" placeholder="Escribe aquí tus comentarios..."></textarea>

      <br><p>En Nombre de Audi Center ________________, le agradezco el que me haya tomado la llamada y le repito mi nombre, para cualquier duda y/o comentario, que usted tenga.</p></h7>

      <br><p>Comentario del asesor</p></h7>

       <textarea name="comentarios" rows="10" cols="40" placeholder="Escribe aquí tus comentarios..."></textarea>

      <br><p>Asesor</p></h7>

     <select name="P4">
      <option selected value="0"> Seleccione una opción... </option>
     </select>
 
      <br><p>Tecnico</p></h7>

     <select name="P5">
      <option selected value="0"> Seleccione una opción... </option>
     </select>
        <!--Botón-->
          <div class="divider"></div>
          <div class="row">
            <div class="section">
              <div class="col s3 offset-s9">
                <button type="submit" class="btn waves-effect waves-light  red accent-4" name="action">Guardar<i class="material-icons right">save</i></button>

                <br><a href="file:///C:/Users/Antonio%20Lopez/Desktop/RESIDENCIAS/PROYECTO/index.html"><button type="submit" class="btn waves-effect waves-light  red accent-4" name="action">Regresar<i class="material-icons right">replay</i></button></a>

              </div>
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