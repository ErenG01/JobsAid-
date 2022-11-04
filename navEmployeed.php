<link rel="stylesheet" href="css/navEmployeed.css">

<nav>
<?Php
  session_start();
  if(empty($_SESSION['nombreemployeed'])) {
    
  
  
  ?>
  <ul>
                <a href="reclutamiento.php"><img src="img/Logo_V2.png" alt=""></a>
                <a href="reclutamiento.php"><li>Publicar empleo</li></a>
                <a href><li>Encontrar candidatos</li></a>
                <a href="formEmpresa.php"><li>Crear empresa</li></a>
                <a href="LoginEmployeed.php"><li>ingresar</li></a>
                
            </ul>
  <?php
  }else{
    $nombreEmployeed = $_SESSION['nombreemployeed'];
    
  ?>
            <ul>
                <a href="reclutamiento.php"><img src="img/Logo_V2.png" alt=""></a>
                <a href="formEmpresa2.php"><li>publicar empleo</li></a>
                <a href><li>Encontrar candidatos</li></a>
                
                <a href="salir.php"><li>salir</li></a>
                <a href="dashboard.php"><li><?php echo $nombreEmployeed;?></li></a>
                
            </ul>
  <?php
    }
  ?>
           
            
            
        
</nav>