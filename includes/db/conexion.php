<?php 	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'php-jobsaid';

	$conection = @mysqli_connect($host,$user,$pass,$db);

	if(!$conection){
		echo "Error en la conexion";
	}
?>