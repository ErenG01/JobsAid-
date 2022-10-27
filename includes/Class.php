<?php

require("db/conexion.php");
$visitas=array();
function get_usuarios(){ 
    
           
    $sql="select * from registro_sesion";

    $res=$this->conex->query($sql);

    while($reg1=mysqli_fetch_assoc($res))
    {
        $this->visitas[]= $reg1;
    }
    return $this->visitas;	

    echo($res);

}


    

?>