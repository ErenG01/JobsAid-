<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer2.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    
    
   
</head>
<body>
      <header class="Navegator" id="naveg">
          <?php include("layouts/header.php");?>
          <a href="cosa">
            <img src="" alt="">
          </a>
        </header>

 
  



<div class="general_container">

    <div class="" id="navega">
          <div class="navUsuario">
            <ul>
                <li><a href="" id="profile">Perfil</a></li>
                <li><a href="" id="applications">postulaciones</a</li>
                <li><a href="" id="emailBox">bandeja de entrada</a></li>
                <li><a href="" id="settings">configuracion</a></li>
                <li><a href="" id="cv">hoja de vida</a></li>
            </ul>
          </div>   
    </div> 

    <div class="perfil" id="perfil">
      
    </div>


    <div class="containerprofile" id="containerprofile">
    
    
    </div>

    

    <footer class="" id="footers2">
      <script src="layouts/footerProfile.js"></script>
    </footer>
     
</div>    








<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script src="../modelo/PROFILE-TASKS/app.js"></script>
</body>


</html>