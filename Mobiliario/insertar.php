<?php
include('../conexion.php') 
 ?>
 <?php
$clave = $_POST['clave'];
$descripcion = $_POST['descripcion'];
$ubicacion = $_POST['ubicacion'];
$factura = $_POST['factura'];

$SQL = "insert into mobiliario(clave,ubicacion,descripcion,factura) values('".$clave."','".$ubicacion."','".$descripcion."','".$factura."')";
$consulta=mysql_query($SQL,$cn);
if ($consulta) {
	echo "<script>alert('Registro insertado'); window.location='alta.php';</script>";
}
else{
	echo "Error al insertar";
}

  ?>
