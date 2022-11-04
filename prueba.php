<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("includes/db/conexion.php");
    
    $varios = array();
    $sql="select * from registro_sesion";
    $result = mysqli_query($conection, $sql);
    while ($row=mysqli_fetch_assoc($result)) {
    
    ?>
    <div onclick="obtenerId()" class="" id="hola" style="border: solid 1px; with:50%;">
    <p id="ids"><?php echo $row['Id_usuario']?></p>
    <p><?php echo $row['nombre']?></p>
    <p><?php echo $row['correo']?></p>
    <p><?php echo $row['usuario']?></p>
    <p><?php echo $row['clave']?></p>
    <p><?php echo $row['rol']?></p>
    </div>

    <?php
    }
    ?>    
    
    <script>
        console.log("hola");
    function obtenerId(){
    const boton = document.getElementById('hola');

    boton.addEventListener("click", function(){

    const getid = document.getElementById('ids').value;

    console.log(getid);

    
 })
}
</script>

    
</body>
</html>