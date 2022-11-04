<?php
include('../includes/db/conexion.php');

if ($_POST["buscadepartamento"] =="" AND $_POST['buscarsalariodesde']=="" AND $_POST['buscarsalariohasta']=="" AND $_POST['tipodeEmpleo']=="" AND $_POST['modalidad']==""){ 

$query = 'SELECT * FROM `oferta empleo`';
$result = mysqli_query($conection, $query);

}



?>