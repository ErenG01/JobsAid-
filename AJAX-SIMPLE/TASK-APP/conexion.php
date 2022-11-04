<?php 	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'asistente_virtual';

	$connection = @mysqli_connect($host,$user,$pass,$db);

	if(!$connection){
		echo "Error en la conexion";
	}
?>