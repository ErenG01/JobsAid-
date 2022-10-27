<?php
require("includes/db/Conexion.php");


  session_start();
  $_SESSION['nombreemployeed'] = ""; 

  

 if (isset($_POST['btn_inicio_s'])) {
  $usuario = $_POST['employeedEmail'];
  $clave = $_POST['passwordEmployeed'];

  $sql="SELECT * FROM empresas WHERE CorreoEmpresa='$usuario' AND password='$clave'";
  $result=mysqli_query($conection, $sql);

    if ($result->num_rows > 0) {
       
      $rows = mysqli_fetch_assoc($result);
      $_SESSION['nombreemployeed'] = $rows['nombreusuario'];
      header("location: ./dashboard.php");
    }else{
      echo"no logro entrar";
      
    }

 }
  
  


?>