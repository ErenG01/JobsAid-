<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formEmployeed1.css">
</head>
<body>
<header>
  <?php include("navEmployeed.php");?>
</header>

<div>
  <form action = "registroEmpresa.php" method= "POST" class="registEmployeed" id="Formularioempelados">
    <h1 class="H1Bienvenido" id="h1bienvenido">Bienvenido</h1>
      <input
        class="form-control mb-2"
        placeholder="nombre de su empresa"
        type="text"
        id="companyname"
        name="companyname"
      >
      
      
      <input
      class="form-control mb-1"
      placeholder="nombre y apellido"
      type="text" 
      id="nameuser"
      name="nameuser"
      > 
      <input 
      class="form-control mb-2"
      placeholder="Correo empresa"
      type="text"
      id="emailCompany"
      name="emailCompany"
      >
      
      <input
      class="form-control mb-2"
      placeholder="Nit de su empresa"
      type="text"
      id="nitCompany" 
      name="nitcompany" 
      >
      <input
      class="form-control mb-2"
      placeholder="numero de telefono"
      type="text"
      id="numberPhone" 
      name="numberPhone" 
      >
      <input
      class="form-control mb-2"
      placeholder="contraseña"
      type="password"
      id="passwordEmployeed" 
      name="passwordEmployeed" 
      >
      <input
      class="btn btn-primary"
      placeholder="guardar y continuar"
      type="submit"
      id="boton" 
      name="boton" 
      value="Continuar"
      
      >
      
    
    </form>
</div>    
</body>
</html>