<?php
include('../includes/db/conexion.php');
session_start();
$idf = $_SESSION['idemploy'];


if (isset($_POST['idv'])) {

    


    $idc = $_POST['idv'];
    $query="INSERT INTO `postulacionesusuario`(`Id_usuario`, `id_vacante`) VALUES ('$idf','$idc')";

    $result = mysqli_query($conection, $query);   
    
   

    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json []= array(
            'id' => $row['id'],
            'iduser' =>$row['Id_usuario'],
            'idvacantess' =>$row['id_vacante']
            
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
 }

?>