<?php
include('../includes/db/conexion.php');
session_start();
$idp = $_SESSION['idemploy'];

$query = "SELECT * FROM registro_sesion WHERE Id_usuario = '$idp'";
$result = mysqli_query($conection, $query);

    if (!$result) {
        die('query failer'. mysqli_error($conection));
    }
$json = array();

while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
            'id' => $row['Id_usuario'],
            'nombre' =>$row['nombre'],
            'apellido' =>$row['apellido'],
            'email' =>$row['correo'],
            'usuario' => $row['usuario'],
            'telefono' =>$row['telefono'],
            'password' =>$row['clave']

    );
}
$jsonstring = json_encode($json);
    echo $jsonstring;



?>