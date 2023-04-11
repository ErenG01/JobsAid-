<?php
SESSION_START();


 

if (!isset($_POST['buscadepartamento'])){$_POST['buscadepartamento'] = '';}
if (!isset($_POST['buscarsalariodesde'])){$_POST['buscarsalariodesde'] = '';}
if (!isset($_POST['buscarsalariohasta'])){$_POST['buscarsalariohasta'] = '';}
if (!isset($_POST['tipodeEmpleo'])){$_POST['tipodeEmpleo'] = '';}
if (!isset($_POST['buscafechahasta'])){$_POST['buscafechahasta'] = '';}
if (!isset($_POST["modalidad"])){$_POST["modalidad"] = '';}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

  
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    
    
</head>
<body>
  
    
<div class="HeaderAndForm">

  <div class="containerHeader">

    <header class="Navegator" id="naveg">
      <?php include("layouts/header.php");?>
      <a href="cosa">
        <img src="" alt="">
      </a>
    </header>
    <div class="header_img" id="header_img">
          
            <h4 class="h4">Buscar Empleo </h4>
            
            <form class="formulario" data-form>
            
                <label class="imput" for="nombre">Cargo o titulo</label>
                <input
                  name="cargo"
                  id="cargo"
                  class="labeltext "
                  type="text"
                  placeholder=""
                  data-nombre
                  width="12px"
                  height="12px"
                />
                <label class="imput" for="nombre">Ciudad</label>
                <input
                  name="ciudad"
                  id="ciudad"
                  class="labeltext"
                  type="text"
                  placeholder=""
                  data-nombre
                  
                />
                
                <button type="submit" id="BtnSearchOferts" class="btn btn-success">Buscar ofertas</button>
                
            
              
              
            </form>

        
          <hr>
    </div>
  </div>

  <div class="filtro" id="filtro">   
    <div class="col-11">

          <table class="table">
                  <thead>
                        <tr class="filters">
                          <form id="formularioIndex" name="formularioIndex" action="index.php" method="POST"> 
                                  <th>
                                          Ciudad
                                          <select  id="buscadepartamento" name="buscadepartamento" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                  <?php if ($_POST["buscadepartamento"] != ''){ ?>
                                                    <option value="<?php echo $_POST["buscadepartamento"]; ?>"><?php echo $_POST["buscadepartamento"]; ?></option>
                                                  <?php } ?>
                                                  <option value=""></option>
                                                  <option value="Amazonas">Amazonas</option>
                                                  <option value="Antioquia">Antioquia</option>
                                                  <option value="Arauca">Arauca</option>
                                                  <option value="Archipielago de san Andres">Archipielago de san Andres</option>
                                                  <option value="Atlantico">Atlantico</option>
                                                  <option value="Bogota D.C">Bogota D.C</option>
                                                  <option value="Bolivar">Bolivar</option>
                                                  <option value="Boyacá">Boyacá</option>
                                                  <option value="Caldas">Caldas</option>
                                                  <option value="Caquetá">Caquetá</option>
                                                  <option value="Casanare">Casanare</option>
                                                  <option value="Cauca">Cauca</option>
                                                  <option value="Cesar">Cesar</option>
                                                  <option value="Chocó">Chocó</option>
                                                  <option value="Córdoba">Córdoba</option>
                                                  <option value="Cundinamarca">Cundinamarca</option>
                                                  <option value="Guainía">Guainía</option>
                                                  <option value="Guaviare">Guaviare</option>
                                                  <option value="Huila">Huila</option>
                                                  <option value="La Guajira">La Guajira</option>
                                                  <option value="Magdalena">Magdalena</option>
                                                  <option value="Nariño">Nariño</option>
                                                  <option value="Norte de Santander">Norte de Santander</option>
                                                  <option value="Putumayo">Putumayo</option>
                                                  <option value="Quindío">Quindío</option>
                                                  <option value="Sucre">Sucre</option>
                                                  <option value="Tolima">Tolima</option>
                                                  <option value="Valle del Cauca">Valle del Cauca</option>
                                                  <option value="Vaupés">Vaupés</option>
                                                  <option value="Vichada">Vichada</option>
                                                  
                                          </select>
                                  </th>
                                  <th>
                                          Salario desde:
                                          <input type="text" id="buscarsalariodesde" name="buscarsalariodesde" class="form-control mt-2" value="<?php echo $_POST["buscarsalariodesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                  </th>
                                  <th>
                                          Salario hasta:
                                          <input type="text" id="buscarsalariohasta" name="buscarsalariohasta" class="form-control mt-2" value="<?php echo $_POST["buscarsalariohasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                  </th>
                                  <th>
                                          Tipo de empleo
                                          <select  id="tipodeEmpleo" name="tipodeEmpleo" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                  <?php if ($_POST["tipodeEmpleo"] != ''){ ?>
                                                    <option value="<?php echo $_POST["tipodeEmpleo"]; ?>"><?php echo $_POST["tipodeEmpleo"]; ?></option>
                                                  <?php } ?>
                                                  <option value=""></option>
                                                  <option  value="tiempo Completo">tiempo Completo</option>
                                                  <option  value="Indefinido">Indefinido</option>
                                                  <option  value="Medio Tiempo">Medio Tiempo</option>
                                                  <option  value="Temporal">Temporal</option>
                                                  <option  value="Contrato">Contrato</option>
                                          </select>
                                  </th>
                                  
                                
                                  <th>
                                          modalidad
                                          <select  id="modalidad" name="modalidad" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                  <?php if ($_POST["modalidad"] != ''){ ?>
                                                    <option value="<?php echo $_POST["modalidad"]; ?>"><?php echo $_POST["modalidad"]; ?></option>
                                                  <?php } ?>
                                                  <option value=""></option>
                                                  <option  value="Presencial">Presencial</option>
                                                  <option  value="Virtual">Virtual</option>
                                                  <option  value="Hibrido">Hibirido</option>
                                          </select>
                                   </th>
                                 
        
                                    
                            </tr>
                          </form>  
                                                    
                  </thead>

          </table>
          <input type="submit" id="btnFiltroVer" class="btn btn-primary" value="Ver" style="margin: auto;">

                
    </div>
  </div>      

        <hr>

    <div class="ContainerJobs" id="ContainerJobs">
      
   
      <main class="MainContainerJob1">

      
        
      

        <div class="MainContainerJobs" id="MainContainerJobs" >
          
          
        </div>
      
          
       
        
        
      </main>
        
      
      
        <aside class="AsideContainerJob1" id="AsideContainerJob1" >

        <div class="asidecontainervacantes" id="asidecontainervacantes">                                            
            <h4 class="h4">Analista Administrativo Teletrabajo Bogota</h4>

            <p class="font-weight-bold">Teletrabajo Bogota</p>
            <p>redes humanas  </p>
            <p>Bogota, Cundinamarca</p>
            
            <button
                  class="btn btn-primary" id="postularse">Postularse</button
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
            
            <button
                class="btn btn-primary" id="postularse">Postularse al empleo</button
                type="submit"
              >
          
          </div> 
        
      
        </aside>
        
  </div> 



    <div class="SectionArticles">
                    <div className="Article1">
                       
                       <img src="img/bombilla.png"></img>
                       <p>La rapidez es otra de las características cuando buscamos trabajo por internet. </p>
                   </div>

                   <div className="Article2">
                       
                       <img src="img/estadistica.png"></img>
                       <p>la facilidad para encontrar trabajo. Es lógico; a cuantas más ofertas puedas aplicar</p>
                   </div>

                   <div className="Article3">
                       
                       <img src="img/icono_trabajadores.png"></img>
                       <p>puedes ahorrarte ese posible inconveniente y buscar y aplicar a las ofertas desde tu propia casa.</p>
                   </div>

    </div>
    <footer class="" id="footers">

      <script src="layouts/footer.js"> </script>

    </footer>

    <div id="usarioscontent">

     <button class=""btn btn-primary">

     </button>


    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../modelo/TASKS/app.js"></Script>                                              
     
</body>   
</html>
