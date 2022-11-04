<?php

require("includes/db/Conexion.php");
session_start();
$idemp= $_SESSION['idemploy'];


if (!empty($_POST)) {
$alert = "";

   

    if(empty($_POST['industria_Empresa']) || empty($_POST['titleVacant']) || empty($_POST['placeVacant']) || empty($_POST['numVacant']) || empty($_POST['salary']) || empty($_POST['timePayment']) || empty($_POST['descVacant']) || empty($_POST['emailAlerts'])){

        echo("todos los campos deben ser diligenciados");
        

    }else{

        $nombrIndustry = $_POST['industria_Empresa'];
        $tituloVac = $_POST['titleVacant'];
        $lugarvacante = $_POST['placeVacant'];
        $numvacantes = $_POST['numVacant'];
        $salario = $_POST['salary'];
        $timpopago = $_POST['timePayment'];
        $descripcionvac = $_POST['descVacant'];
        $alertemail = $_POST['emailAlerts'];

        $sql1="insert into `oferta empleo`(industria,titulo_vacante,LugarEmpleo,numeroVacantes,sueldo, tiempoPago, CorreoAlertas, descripcion_vacante,idEmpresa) values('$nombrIndustry','$tituloVac','$lugarvacante','$numvacantes','$salario','$timpopago','$descripcionvac','$alertemail','$idemp')";
        /*$sql = "insert into empresas (nombreempresa,numempleados,nombreusuario,nit,numerotelesfono) values('$nombrempresa','$numEmpleados','$username','$nit','$numTelefono')";*/
        $result=mysqli_query($conection, $sql1);

        echo("se agego con exito");
        
    }
}







?>