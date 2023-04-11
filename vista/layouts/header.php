
<link rel="stylesheet" href="css/header.css"/>



<div class="navBox"> 

    <a href="./">

  <div class="Logo">
    <img
    src="img/Logo_V3_white.png"
    
    title = "logoJobs"
    class="LogoClass"
    width = 100px;
    height = 100px;
    ></img>
  </a>
  </div>

  <nav>
       
      <ul>
       

        
        <?php
    
        if (empty($_SESSION['nombreusu'])) {
            
            ?>
            <li class="header__link"><a href="./">Inicio</a></li>
            <li class="header__link"><a href="../Jobs_Aid_Employers/vista/Reclutamiento.php">Publicar oferta</a></li>
            <li class="header__link"><a href="Acceso_Usuario.php">Hoja de vida</a></li>
            <a href = "Acceso_Usuario.php" class ="login">
    
                
                <li class="">
                    
                    <p><?php  ?>Loggin</p>
                    <img src="img/perfil2_white.png" alt="" class="imagenperfil" with="50px" height="20px">
                </li>
            </a>
        
        <?php
        }else{
            $mostrarnombre = $_SESSION['nombreusu'];
        ?>
        <li class="header__link"><a href="./">Inicio</a></li>
            <li class="header__link"><a href="../Jobs_Aid_Employers/vista/Reclutamiento.php">Publicar oferta</a></li>
            <li class="header__link"><a href="profile.php">Perfil</a></li>
        <div class="login2">
            <div class="login3">
            <p>Bienvenido</p>
            
            <li class="login4">
                <img src="img/perfil2_white.png" alt="" class="imagenperfil" with="50px" height="20px">
                <p><?php echo $mostrarnombre;?></p>
            </li>
            <a href="../modelo/salir.php">salir</a>
            
            </div>    
        </div>
        
         <?php    }  ?>
        
        

      </ul>
      
      
  
   
  
</div>

</nav>

</div>