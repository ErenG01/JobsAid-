<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ejercicio2.php" method="POST">
        <input type="text" placeholder="nombre" class="name" id="name">
        <input type="text" placeholder="apellido" class="apellido" id="apellido">
        <input type="text" placeholder="telefono" class="number" id="number">
        <input type="submit" placeholder="nombre" class="btn" id="btn">

</form>

<?php
    if ($_POST["name"] == '' and $_POST["apellido"] == ''
    and $_POST["telefono"] == '') {
        
        echo("no hay nada");
    }else {
        echo("funciona");
    }



?>
    
</body>
</html>