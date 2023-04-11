<?php
include('../includes/db/conexion.php');
session_start();
$idp = $_SESSION['idemploy'];
 
if ($_POST["city"] =="" AND $_POST['salariodesde']=="" AND $_POST['salariohasta']=="" AND $_POST['tipoempleo']=="" AND $_POST['modality']==""){ 

    $query = "SELECT * FROM `oferta empleo` WHERE idEmpresa = '$idp'";
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
}else{
    $query = "SELECT * FROM `oferta empleo` WHERE idEmpresa = '$idp'";

    if ($_POST["city"] != '' ){
      $query .= " and LugarEmpleo = '".$_POST['city']."' ";
    }
    if ($_POST["salariodesde"] != '' ){
      $query .= " and sueldo >= '".$_POST['salariodesde']."' ";
    }
    if ($_POST["salariohasta"] != '' ){
      $query .= " and sueldo <= '".$_POST['salariohasta']."' ";
    }
    if ($_POST["tipoempleo"] != '' ){
      $query .= " and tipoEmpleo = '".$_POST['tipoempleo']."' ";
    }
    if ($_POST["modality"] != '' ){
      $query .= " and departamento = '".$_POST['modality']."' ";
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
            'type' =>$row['tipoEmpleo']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>