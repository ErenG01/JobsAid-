<?php
    include('../includes/db/conexion.php');

    
 
if (!isset($_POST["cargo"]) && !isset($_POST['city'])){
    
    

    $query = "SELECT * FROM `oferta empleo`";
    $result = mysqli_query($conection, $query);
    if (!$result) {
        die('Query error'. mysqli_error($connection));
    }
    $json = array();
    while ($row = mysqli_fetch_array($result)) {
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
     echo($jsonstring);
}else{

    $query = "SELECT * FROM `oferta empleo` where 1";

    if (isset($_POST["cargo"]) && $_POST["cargo"] != ""){
      $query .= " and titulo_vacante LIKE'".$_POST['cargo']."%' ";
    }
    if (isset($_POST["city"]) && $_POST["city"] != ""){
      $query .= " and LugarEmpleo LIKE'".$_POST['city']."%' ";
    }

   
    $json = array();
    $result = mysqli_query($conection, $query);
    while ($row = mysqli_fetch_array($result)) {
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

}

?>