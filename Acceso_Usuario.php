
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    
    <title>Iniciar sesion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    
    
    <link rel='stylesheet' href='css/RegistrarUsuario.css'>
</head>
<body>


<div class="container">

  <div class="containerlogo">

    <div class="logoscroll">
      <a href="index.php"><img src="img/Logo_V3.png" alt=""></a>
      
      <p>la mejor manera para encontrar el trabajo de tus sueños</p>
    </div>
  
  
  
  </div>

  <div class="container2">

    
   

    <form action="iniciarSesion.php" method="post" class="formulario_Sesion" >
      <h1 class="H1Bienvenido_Sesion">Inicar sesion</h1>
       
        
        <input
          class="form-control mb-2"
          placeholder="Ingrese su correo"
          type="text"
          id="userEmail"
          name="userEmail"
        >
        
        <input
        class="form-control mb-2"
        placeholder="Contraseña"
        type="password"
        id="password" 
        name="password" 
        >
        
        <a href="" class="Forgetpassword">¿Olvidaste tu contraseña?</a>
        <br>
      
        

        <input type="submit" class= "btn btn-primary" name="btn_inicio_s" value = "Iniciar Sesion">

        <a href="#h1bienvenido" class="btn btn-primary">Registar</a>
        

</form>

<div>
  <form action = "RegistrarUsuario.php" method= "POST" class="formulario" id="FormularioRegistro">
    <h1 class="H1Bienvenido" id="h1bienvenido">Bienvenido</h1>
      <input
        class="form-control mb-2"
        placeholder="Ingrese su nombre"
        type="text"
        id="user_name"
        name="user_name"
      >
      <input 
      class="form-control mb-2"
      placeholder="correo"
      type="text"
      id="email_user"
      name="email_user"
      >
      
      <input
      class="form-control mb-1"
      placeholder="usuario"
      type="text" 
      id="user_lastname"
      name="user_lastname"
      > 
      
      <input
      class="form-control mb-2"
      placeholder="Contraseña"
      type="password"
      id="user_password" 
      name="user_password" 
      >

      
    <!-- imprimir los valores que se tiene guardados en la base de datos del rol -->
      <?php
      require("includes/db/conexion.php");
				$query_rol = mysqli_query($conection,"select * from rol");
				$result_rol =  mysqli_num_rows($query_rol);


				?>
      <select name="rol" id="rol">
					<?php  
						if($result_rol > 0)
						{
							while ($rol = mysqli_fetch_array($query_rol)){
					?>
							<option value="<?php echo $rol["idrol"]; ?>"><?php echo $rol["rol"] ?></option>
					<?php
							}
						}
					?>
				</select>	
      <p>Al crear una cuenta o iniciar sesión, usted reconoce y acepta las condiciones de Job´s Aid. Además, reconoce nuestras políticas de cookies y privacidad. Recibirá mensajes de marketing y podrá darlos de baja en cualquier momento mediante el enlace para cancelar la suscripción que incluimos en nuestros mensajes, o según se detalla en nuestras condiciones.</p>

      <button
        class="btn btn-primary">Registar</button
        type="submit"
      >


  </form>
    
  </div>  


</div>
 


</div>



<footer>
  <div class="backgroud">
    <div class="credits">
      <ul>
        <li>Empleos</li>
        <li>Salarios</li>
        <li>Acerca de</li>
        <li>© 2022 Jobs Aid</li>
        <li>Cookies</li>
        <li>privacidad</li>
        <li>condiciones</li>
      </ul>
    </div>
</div>
</footer>
<script src="Inicar_Sesion.js"></script>
</body>
</html>