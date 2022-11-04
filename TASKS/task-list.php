<?php
 include("../includes/db/conexion.php");

 $query = "SELECT * FROM `oferta empleo`";
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
            'type' =>$row['tipoEmpleo']
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;

?>