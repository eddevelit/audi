<?php 
$con = new mysqli("localhost", "root", "", "audi");
if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}else{
	echo $con->host_info . "\n";
}


 ?>