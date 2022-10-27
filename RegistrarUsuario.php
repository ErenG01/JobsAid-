<?php
require("includes/db/Conexion.php");


 if (!empty($_POST)) {

    $alert='';
    if(empty($_POST['user_name']) || empty($_POST['email_user']) || empty($_POST['user_lastname']) || empty($_POST['user_password'])){

        $alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
    }else
            $nombre = $_POST['user_name'];
			$email = $_POST['email_user'];
			$usuario = $_POST['user_lastname'];
			$clave = md5($_POST['user_password']);
            $rol = ($_POST['rol']);
			

    $sql="insert into registro_sesion (nombre,correo,usuario,clave,rol) values('$nombre','$email','$usuario','$clave','$rol')";
  $result=mysqli_query($conection, $sql);

    echo"se agrego correctamente";
    header("location: ./index.php");
    }

 
  
  


?>