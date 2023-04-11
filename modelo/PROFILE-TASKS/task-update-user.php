<?php
include('../../includes/db/conexion.php');
session_start();
$idp = $_SESSION['idemploy'];


$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$nombreususario= $_POST['nombreUsuario'];
$correo= $_POST['correo'];
$contraseña= $_POST['contraseña'];
$telefononumero= $_POST['numerotelef'];

$query1 = "UPDATE `registro_sesion` SET `nombre`='$nombre',`apellido`='$apellido',`correo`='$correo',`usuario`='$nombreususario',`telefono`='$telefononumero',`clave`='$contraseña' WHERE Id_usuario = '$idp'";
$result1 = mysqli_query($conection, $query1);

    if (!$result1) {
        die('query failed' . mysqli_error($conection));
    }

 $query2 = "SELECT * FROM registro_sesion WHERE Id_usuario='$idp'";
 $result2 = mysqli_query($conection, $query2);

    $json = array();
    while ($row = mysqli_fetch_array($result2)) {
        $json []= array(
            'id' => $row['Id_usuario'],
            'nombre' =>$row['nombre'],
            'lastname' =>$row['apellido'],
            'email' =>$row['correo'],
            'usuario' => $row['usuario'],
            'password' =>$row['clave'],
            'phone' =>$row['telefono']
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
            


?>