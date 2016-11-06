<?php
include('../conexion.php') 
 ?>
 <?php
$nombre = $_POST['nombre'];
$encargado = $_POST['encargado'];
$funcion = $_POST['funcion'];


$SQL = "insert into departamentos(nombre,encargado,funcion) values('".$nombre."','".$encargado."','".$funcion."')";
$consulta=mysql_query($SQL,$cn);
if ($consulta) {
	echo "<script>alert('Registro insertado'); window.location='alta.php';</script>";
}
else{
	echo "Error al insertar";
}

  ?>
