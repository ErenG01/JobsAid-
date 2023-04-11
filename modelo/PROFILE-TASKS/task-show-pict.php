<?php
include('../../includes/db/conexion.php');
session_start();
$idp = $_SESSION['idemploy'];

$query = "SELECT * FROM registro_sesion WHERE Id_usuario = '$idp'";

$result = mysqli_query($conection, $query);


$json= array();
while ($row = mysqli_fetch_assoc($result)) {
    $json[] = array(
            'id' => $row['Id_usuario'],
            'nombre' =>$row['nombre'],
            'lastname' =>$row['apellido'],
            'email' =>$row['correo'],
            'usuario' => $row['usuario'],
            'password' =>$row['clave'],
            'phone' =>$row['telefono'],
            'picture' =>$row['foto'],
            'city' =>$row['ciudad'],
            'profession' => $row['profesion']
    );

}
$jsonstring = json_encode($json);
echo $jsonstring;





?>