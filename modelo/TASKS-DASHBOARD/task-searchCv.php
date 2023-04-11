<?php
include('../includes/db/conexion.php');

$profesion = $_POST['titulo'];
$cuidad = $_POST['city'];

$query = "SELECT * FROM registro_sesion WHERE profesion LIKE'$profesion%' AND ciudad LIKE'$cuidad%'";
$result = mysqli_query($conection, $query);

$json = array();

while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
            'nombre' =>$row['nombre'],
            'apellido' =>$row['apellido'],
            'email' =>$row['correo'],
            'telefono' =>$row['telefono'],
            'city' =>$row['ciudad'],
            'profession' =>$row['profesion'],
            'picture' =>$row['foto'],
            'cv' =>$row['cv']

    );
}

$jsonstring = json_encode($json);
echo $jsonstring;



?>