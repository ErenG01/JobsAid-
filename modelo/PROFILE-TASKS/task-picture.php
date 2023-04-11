<?php
include('../../includes/db/conexion.php');
session_start();
$idp = $_SESSION['idemploy'];


$nombre_foto =$_FILES['upPicture']['name'];
$url_temp =$_FILES['upPicture']['tmp_name'];




echo $url_temp;
$destino2 = "img/uploads";
$destino2 = $destino2."/".$nombre_foto;

$destino="../img/uploads";
$destino=$destino."/".$nombre_foto;
move_uploaded_file($url_temp, "$destino");

$query1 = "UPDATE `registro_sesion` SET `foto`='$destino2' WHERE Id_usuario = '$idp'";

$result1 = mysqli_query($conection, $query1);

    if (!$result1) {
        die('query failed'. mysqli_error($conection));
    }


?>