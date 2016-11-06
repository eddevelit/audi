<?php
include('../conexion.php') 
 ?>
 <?php
$titulo = $_POST['titulo'];
$editorial = $_POST['editorial'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];
$tematica = $_POST['tematica'];

$SQL = "insert into biblioteca(titulo,autor,editorial,isbn,tematica) values('".$titulo."','".$editorial."','".$autor."','".$isbn."','".$tematica."')";
$consulta=mysql_query($SQL,$cn);
if ($consulta) {
	echo "<script>alert('Registro insertado'); window.location='alta.php';</script>";
}
else{
	echo "Error al insertar";
}

  ?>
