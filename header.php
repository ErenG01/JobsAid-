<?php
 
 


 
?>
 


<link rel="stylesheet" href="css/header.css"/>



<div class="navBox"> 

    <a href="index.php">

  <div class="Logo">
    <img
    src="img/Logo_V3.png"
    
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
            <li class="header__link"><a href="index.php">Inicio</a></li>
            <li class="header__link"><a href="Reclutamiento.php">Publicar oferta</a></li>
            <li class="header__link"><a href="Acceso_Usuario.php">Hoja de vida</a></li>
            <a href = "Acceso_Usuario.php" class ="login">
    
                
                <li class="">
                    
                    <p><?php  ?>Loggin</p>
                    <img src="img/perfil2.png" alt="" class="imagenperfil" with="50px" height="20px">
                </li>
            </a>
        
        <?php
        }else{
            $mostrarnombre = $_SESSION['nombreusu'];
        ?>
        <li class="header__link"><a href="index.php">Inicio</a></li>
            <li class="header__link"><a href="Reclutamiento.php">Publicar oferta</a></li>
            <li class="header__link"><a href="profile.php">Hoja de vida</a></li>
        <div class="login2">
            <div class="login3">
            <p>Bienvenido</p>
            
            <li class="login4">
                <img src="img/perfil2.png" alt="" class="imagenperfil" with="50px" height="20px">
                <p><?php echo $mostrarnombre;?></p>
            </li>
            <a href="salir.php">salir</a>
            
            </div>    
        </div>
        
         <?php    }  ?>
        
        

      </ul>
      
      
  
   
  
</div>

</nav>

</div>