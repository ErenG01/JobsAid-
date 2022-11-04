<?php
    include('conexion.php');

    $search = $_POST['search'];
 
if (!empty($search)) {
    
    $query = "SELECT * FROM registro_sesion WHERE usuario LIKE '$search%'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query error'. mysqli_error($connection));
    }
    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id' => $row['Id_usuario'],
            'nombre' =>$row['nombre'],
            'correo' =>$row['correo'],
            'usuario' => $row['usuario'],
            'clave' =>$row['clave'],
            'rol' =>$row['rol'],
            'estatus' =>$row['rol']
          
        );
    }
     $jsonstring = json_encode($json);
     echo $jsonstring;
}

?>