<?php
 include('../includes/db/conexion.php');

 if (isset($_POST['idv'])) {
    $idc = $_POST['idv'];
    $query= "SELECT * FROM `oferta empleo` WHERE id_vacante = $idc";
    $result = mysqli_query($conection, $query);   

    if (!$result) {
        die('query failed' . mysqli_error($conection));
    }

    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json []= array(
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
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
 }

 




?>