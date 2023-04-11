<?php
require("../includes/db/Conexion.php");


 if (!empty($_POST)) {

    $alert='';
    if(empty($_POST['user_name']) || empty($_POST['user_lastname']) || empty($_POST['email_user']) || empty($_POST['user_password']) || empty($_POST['number_phone']) || empty($_POST['user_password']) || empty($_POST['user_password'])){

        $alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
    }else
            $nombre = $_POST['user_name'];
			$apellido = $_POST['user_lastname'];
			$correo = $_POST['email_user'];
			$contrasena = md5($_POST['user_password']);
            $telefono = ($_POST['number_phone']);
            $ciudad = ($_POST['city']);
            $profesion = ($_POST['profession']);
			

    $sql="INSERT INTO registro_sesion(nombre,apellido,correo,telefono,ciudad,profesion,clave,foto) VALUES('$nombre','$apellido','$correo','$telefono','$ciudad', '$profesion','$contrasena','img/uploads/perfil2.png')";
  $result=mysqli_query($conection, $sql);

  echo'<script type="text/javascript">
  alert("Registrado correctamente, por favor inicie sesion");
  window.location.href="../";
  </script>';
    }

 
  
  


?>