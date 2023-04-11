<?php
include('../../includes/db/conexion.php');

session_start();
$idp= $_SESSION['idemploy'];

$query = "SELECT * FROM `oferta empleo` INNER JOIN postulacionesusuario ON `oferta empleo`.id_vacante = postulacionesusuario.id_vacante INNER JOIN registro_sesion ON registro_sesion.Id_usuario = postulacionesusuario.Id_usuario WHERE postulacionesusuario.Id_usuario = '$idp'";
$result = mysqli_query($conection, $query);

    if (!$result) {
        die('query failed'. mysqli_error($conection));
    }

    $json = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $json[] = array(
            'id' => $row['id_vacante'],
            'industria' =>$row['industria'],
            'titulovacante' =>$row['titulo_vacante'],
            'lugarempleo' => $row['LugarEmpleo'],
            'numerovacantes' =>$row['numeroVacantes'],
            'salary' =>$row['sueldo'],
            'timepayment' =>$row['tiempoPago'],
            'descvacante' =>$row['descripcion_vacante'],
            'type' =>$row['modalidad']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;

?>