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
$clave_empleado = $_POST['clave_empleado'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$carrera = $_POST['carrera'];
$nivel_de_estudio = $_POST['nivel_de_estudio'];
$nss = $_POST['nss'];
$sueldo = $_POST['sueldo'];
$tipo_contrato = $_POST['tipo_contrato']; 

$SQL = "insert into empleado(nombre,apellidom,apellidop,calle,colonia,delegacion,entidad,clave_empleado,fecha_ingreso,nivel_de_estudio,carrera,nss,sueldo,tipo_contrato) values('".$nombre."','".$paterno."','".$materno."','".$calle."','".$colonia."','".$delegacion."','".$entidad."','".$clave_empleado."','".$fecha_ingreso."','".$nivel_de_estudio."','".$carrera."','".$nss."','".$sueldo."','".$tipo_contrato."')";
$consulta=mysql_query($SQL,$cn);
if ($consulta) {
	echo "<script>alert('Registro insertado'); window.location='alta.php';</script>";
}
else{
	echo "Error al insertar";
}

  ?>
