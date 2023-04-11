<?php
require("../includes/db/conexion.php");


  session_start();
  $_SESSION['nombreusu'] = ""; 
  $_SESSION['idemploy'] = ""; 

  

 if (isset($_POST['btn_inicio_s'])) {
  $usuario = $_POST['userEmail'];
  $clave = md5($_POST['password']);

  $sql="SELECT * FROM registro_sesion WHERE correo='$usuario' AND clave='$clave'";
  $result=mysqli_query($conection, $sql);

    if ($result->num_rows > 0) {
       
      $rows = mysqli_fetch_assoc($result);
      $_SESSION['nombreusu'] = $rows['nombre'];
      $_SESSION['idemploy'] = $rows['Id_usuario'];
      header("location: ../");
    }else{
      echo"no logro entrar";
      
    }

 }
  
  


?>