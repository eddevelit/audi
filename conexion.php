<?php 
$cn = mysql_connect("localhost","root","");
$db = mysql_select_db("escuela") or die ("Error db");
return($cn);
 ?>