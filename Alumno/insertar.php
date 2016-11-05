<?php
include('../conexion.php') 
 ?>
 <?php
$nombre = $_POST['nombre'];
$paterno = $_POST['apellidop'];
$materno = $_POST['apellidom'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$delegacion = $_POST['delegacion'];
$entidad = $_POST['entidad'];
$no_control = $_POST['no_control'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$carrera = $_POST['carrera'];
$tipo_de_curso = $_POST['tipo_de_curso'];
$nss = $_POST['nss'];
$porcentaje_creditos = $_POST['porcentaje_creditos'];
$nivel_ingles = $_POST['nivel_ingles']; 

$SQL = "insert into alumno(nombre,apellidom,apellidop,calle,colonia,delegacion,entidad,no_control,fecha_ingreso,carrera,tipo_de_curso,nss,porcentaje_creditos,nivel_ingles) values('".$nombre."','".$paterno."','".$materno."','".$calle."','".$colonia."','".$delegacion."','".$entidad."','".$no_control."','".$fecha_ingreso."','".$carrera."','".$tipo_de_curso."','".$nss."','".$porcentaje_creditos."','".$nivel_ingles."')";
$consulta=mysql_query($SQL,$cn);
if ($consulta) {
	echo "<script>alert('Registro insertado'); window.location='alta.php';</script>";
}
else{
	echo "Error al insertar";
}

  ?>
