<?php
include('../includes/db/conexion.php');
session_start();
$idp = $_SESSION['idemploy'];


$query = "SELECT cv FROM `registro_sesion` WHERE Id_usuario = $idp";
$result = mysqli_query($conection, $query);

    if (!$result) {
        die('query failed'. mysqli_error($conection));
    }

$json = array();

while ($row = mysqli_fetch_assoc($result)) {
    $json[] = array(
        'picture' => $row['cv'],
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>