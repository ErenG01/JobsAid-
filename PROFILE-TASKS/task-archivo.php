<?php
include('../includes/db/conexion.php');
session_start();
$idp = $_SESSION['idemploy'];


$nombre_foto =$_FILES['upCV']['name'];
$url_temp =$_FILES['upCV']['tmp_name'];




echo $url_temp;

$destino="../img/uploads";
$destino=$destino."/".$nombre_foto;
move_uploaded_file($url_temp, "$destino");

$query = "UPDATE `registro_sesion` SET `foto`='$destino' WHERE Id_usuario = '$idp'";

$result = mysqli_query($conection, $query);

    if (!$result) {
        die('query failed'. mysqli_error($conection));
    }

    echo("hecho");

?>