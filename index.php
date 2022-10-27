<?php
SESSION_START();
$condicion = "";
if (!empty($_SESSION['nombreusu'])) {
  $condicion = true;
}else{
  $condicion = false;
}
echo $condicion;

 





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

  
    
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    
    
</head>
<body>
  
    
<div class="HeaderAndForm">

  <header class="Navegator" id="naveg">
    <?php include("header.php");?>
    <a href="cosa">
      <img src="" alt="">
    </a>
  </header>
  <div class="header_img">
        
          <h4 class="h4">Buscar Empleo </h4>
          
          <form class="formulario" data-form>
          
              <label class="imput" for="nombre">Cargo o titulo</label>
              <input
                name="nombre"
                id="nombre"
                class="labeltext "
                type="text"
                placeholder=""
                required
                data-nombre
                width="12px"
                height="12px"
              />
              <label class="imput" for="nombre">Ciudad</label>
              <input
                name="nombre"
                id="nombre"
                class="labeltext"
                type="text"
                placeholder=""
                required
                data-nombre
                
              />
              
              <button type="submit" class="btn btn-primary">Buscar ofertas</button>
              
          
            
            
          </form>

        </div>  
        <hr>
        </div>
        <div class="filtro">
   
        </div>
        <div class="filtrov2">
          <form class="inputs_filters">

            <input name="Salario" id="CBox_Salario" class="" placeholder="Salario" type="">
            <input name="Modalidad" id="CBox_Modalidad" class="" placeholder="Modalidad" type="">
            <input name="Cuidad" id="CBox_Cuidad" class="" placeholder="Cuidad" type="">
            <input name="Area de trabajo" id="CBox_AreaTrabajo" class="" placeholder="Area de trabajo" type="">
            <input name="Empresa" id="CBox_Empresa" class="" placeholder="Empresa" type="">
            <button class="btn btn-primary">Filtrar</button>



          </form>
        </div>

        <hr>

    <div class="ContainerJobs">
      
   
      <main class="MainContainerJob1">

      <?php require("includes/db/conexion.php");
      
      $sql="SELECT * FROM `oferta empleo`";
      $result=mysqli_query($conection, $sql);
      while($row=mysqli_fetch_assoc($result))
      
      
      { ?>

        <div class="MainContainerJob">
          <h4 class="h4"><?php echo $row["titulo_vacante"];?></h4>
          <p><?php echo $row["industria"];?></p>
          <p><?php echo $row["LugarEmpleo"];?></p>
        <br>
          <ul>
              <li><p>Salario:<?php echo $row["sueldo"];?></p></li>
              <li><p><?php echo $row["descripcion_vacante"];?></p></li>
              <li><p>Horario: lunes a viernes de 7:00am a 5:30pm</p></li>
          </ul>

          <br>
          <p>publicado hace mas de 30 dias de Bogota,Cundinamarca</p>
        </div>

        <?php } ?>
      </main>
        
      
      
      <aside class="AsideContainerJob">

        <h4 class="h4">Analista Administrativo Teletrabajo Bogota</h4>

        <p class="font-weight-bold">Teletrabajo Bogota</p>
        <p>redes humanas  </p>
        <p>Bogota, Cundinamarca</p>
        
        <button
              class="btn btn-primary">Postularse</button
              type="submit"
          >
        <button
            class="btn btn-primary">✰</button
            type="submit"
          >
        <hr> 
        <p>¡Únete a una de las mejores compañías para laborar!
          <br>
          <br>
          Quieres formas parte del equipo de trabajo de una de las empresas mas importantes del país?
          <br>
          <br>
          Si eres técnico o tecnólogo en áreas administrativas y tienes conocimiento en manejo de bases de datos y Excel intermedio, esta oportunidad es para ti!
          <br>
          <br>
          Serás la persona encargada de gestionar y analizar bases de datos, realizar la gestión documental y apoyar la ejecución del proyecto de Teletrabajo
        </p>
        <hr>
        <p>¿Que te ofrecemos?</p>
          <br>
          <h4 class="font-weight-bold">Salario:</h4>
          <br>
          <h4 class="font-weight-bold">Horarios:</h4>
          <br>
          <h4 class="font-weight-bold">Lugar:</h4>
          <br>
        <p>Si te encuentras interesado y cumples con el perfil, postúlate!</p>  
        <hr>
        <?php
        if ($condicion) {
          
        ?>
        <button
            class="btn btn-primary">Postularse al empleo</button
            type="submit"
          >
        <?php };  ?>
        <button
            class="btn btn-primary">Postularse</button
            type="submit"
          >
        
      
      </aside>
    </div>
    <footer class="" id="footers">

      <script src="footer.js"> </script>

    </footer>

    <div id="usarioscontent">

      <script type="module" src="mostrar.js"></script>


    </div>
      
    
        
      
      
      <script type="module" src="../controllers/registro.controller.js"></script>
</body>   
</html>
