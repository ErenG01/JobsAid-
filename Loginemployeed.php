<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/LoginEmployeed.css">
</head>
<body>
  <div class="contenedor">
    <div class="contenedor2">
      <a href="Reclutamiento.php"><div class="boxLogo"><img src="img/Logoemployeed_V2.png" alt="" class="imgLogo"> </div></a>
    </div> 
  
    <div class="formLoginEmployeed" id="">
        <form  class="formulario2Employyed" id="" action="accessEmployeed.php" method="POST">
              <h1>Bienvenido</h1>  
              <label for="">Correo electronico empresa</label>
              <input
                class="form-control mb-2"
                placeholder="introducir Correo"
                type="text"
                id="employeedEmail"
                name="employeedEmail"
              >
              <label for="">Contraseña</label>
              <input
              class="form-control mb-2"
              placeholder="Introducir la contraseña"
              type="text"
              id="passwordEmployeed"
              name="passwordEmployeed"
              >
          
              <div class="buttons" id="">
                
                <a href="formEmpresa.php"
                class="btn btn-primary"
                placeholder=""
                type="submit"
                id="" 
                name="" 
                
                >Nueva empresa</a>

                <input
                class="btn btn-primary"
                placeholder=""
                type="submit"
                id="btn_inicio_s" 
                name="btn_inicio_s" 
                value="inicar Sesion"
                >
              </div>
        </form>
      </div>
  </div>  
</body>
</html>