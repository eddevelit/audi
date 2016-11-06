<?php
include('../conexion.php') 
 ?>
 <?php
$clave_materia = $_POST['clave_materia'];
$carrera = $_POST['carrera'];
$nombre = $_POST['nombre'];
$horario = $_POST['horario'];
$turno = $_POST['turno'];
$semestre =$_POST['semestre'];
$horas_semanales = $_POST['horas_semanales'];
$horas_totales = $_POST['horas_totales'];

$semestreNum = (int)$semestre;

$SQL = "insert into materia(clave_materia,carrera,nombre,horario,turno,semestre,horas_semanales,horas_totales) values('".$clave_materia."','".$carrera."','".$nombre."','".$horario."','".$turno."','".$semestreNum."','".$horas_semanales."','".$horas_totales."')";
$consulta=mysql_query($SQL,$cn);
if ($consulta) {
	echo "<script>alert('Registro insertado'); window.location='alta.php';</script>";
}
else{
	echo "Error al insertar";
}

  ?>
