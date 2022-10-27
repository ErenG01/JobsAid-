<?php 	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'asistente_virtual';

	$conection = @mysqli_connect($host,$user,$pass,$db);

	if(!$conection){
		echo "Error en la conexion";
	}
?>