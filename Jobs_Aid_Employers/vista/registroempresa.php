<?php

require("includes/db/Conexion.php");



if (!empty($_POST)) {
$alert = "";

    if(empty($_POST['companyname']) || empty($_POST['nameuser']) || empty($_POST['emailCompany']) || empty($_POST['nitcompany']) || empty($_POST['numberPhone'])){

        echo("todos los campos deben ser diligenciados");

    }else{

        $nombrempresa = $_POST['companyname'];
        $numEmpleados = $_POST['nameuser'];
        $username = $_POST['emailCompany'];
        $nit = $_POST['nitcompany'];
        $numTelefono = $_POST['numberPhone'];
        $pass = md5($_POST['passwordEmployeed']);

        $sql = "insert into empresas (nombreempresa,nombreusuario,correoEmpresa,nit,numerotelefono,password) values('$nombrempresa','$numEmpleados','$username','$nit','$numTelefono','$pass')";
        $result=mysqli_query($conection, $sql);

        echo("se agego con exito");
        
    }
}







?>