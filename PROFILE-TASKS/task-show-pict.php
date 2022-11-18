<?php
include('../includes/db/conexion.php');
session_start();
$idp = $_SESSION['idemploy'];

$query = "SELECT * FROM registro_sesion WHERE Id_usuario = '$idp'";

$result = mysqli_query($conection, $query);


$json= array();
while ($row = mysqli_fetch_assoc($result)) {
    $json[] = array(
        'picture' => $row['foto'],
        'name' => $row['nombre']
    );

}
$jsonstring = json_encode($json);
echo $jsonstring;





?>