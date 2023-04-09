<?php
include('../includes/db/conexion.php');

if (!isset($_POST["city"]) && !isset($_POST['salariodesde']) && !isset($_POST['salariohasta']) && !isset($_POST['tipoempleo']) && !isset($_POST['modality'])){ 

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
            'type' =>$row['modalidad']
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}else{
  
    $query = "SELECT * FROM `oferta empleo` where 1";

    if (isset($_POST["city"]) && $_POST["city"] != ""){
      $query .= " and LugarEmpleo = '".$_POST['city']."' ";
    }
    if (isset($_POST["salariodesde"]) && $_POST["salariodesde"] != ""){
      $query .= " and sueldo >= '".$_POST['salariodesde']."' ";
    }
    if (isset($_POST["salariohasta"]) && $_POST["salariohasta"] !=""){
      $query .= " and sueldo <= '".$_POST['salariohasta']."' ";
    }
    if (isset($_POST["tipoempleo"]) && $_POST["tipoempleo"] != ""){
      $query .= " and tipoEmpleo = '".$_POST['tipoempleo']."' ";
    }
    if (isset($_POST["modality"]) && $_POST["modality"] != ""){
      $query .= " and modalidad = '".$_POST['modality']."' ";
    }
    
    
    $json = array();
    $result = mysqli_query($conection, $query);
    while($row=mysqli_fetch_assoc($result)) {
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
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>