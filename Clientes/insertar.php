<?php

include('../conexion.php') ;

$nombre             = $_POST['nombre'];
$apellidop          = $_POST['apellidop'];
$apellidom          = $_POST['apellidom'];
$telefono           = $_POST['telefono'];
$telefono2          = $_POST['telefono2'];
$correo_electronico = $_POST['correo_electronico'];
$tipo               = $_POST['tipo'];
$tipo_servicio      = $_POST['tipo_servicio'];
$factura            = $_POST['factura'];
$numero_chasis      = $_POST['numero_chasis'];
$kilometraje        = $_POST['kilometraje'];
$fecha_entrada      = $_POST['fecha_entrada'];
$fecha_salida       = $_POST['fecha_salida'];
$numero_orden       = $_POST['numero_orden'];
$nmbrea             = $_POST['nombrea'];
$nombret            = $_POST['nombret']; 


if (!$con->query("INSERT INTO cliente (nombre,apellidom,apellidop,telefono,telefono2,correo_electronico,tipo,tipo_servicio,factura,numero_chasis,kilometraje,fecha_entrada,fecha_salida,numero_orden,nombrea,nombret) VALUES 
	('".$nombre."',
	'".$apellidop."',
	'".$apellidom."',
	'".$telefono."',
	'".$telefono2."',
	'".$correo_electronico."',
	'".$tipo."',
	'".$tipo_servicio."',
	'".$factura."',
	'".$numero_chasis."',
	'".$kilometraje."',
	'".$fecha_entrada."',
	'".$fecha_salida."',
	'".$numero_orden."',
	'".$nmbrea."',
	'".$nombret."')")) 
{
    echo "Falló la inserción en la tabla: (" . $con->errno . ") " . $con->error;
}

  ?>
  