<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forEmployeeds2.css">
</head>
<body>
  <header>
    <?php include("navEmployeed.php")?>
  </header>


<div class="" id="">
    <div class="conten1" id="conten1">

  <form class="" id="" action="registroVacante.php" method="POST">
    <h1>Publica tu anuncio aqui</h1>  
      <label for="">la indrustia de su empresa</label>
        <input
          class="form-control mb-2"
          placeholder="elija una opcion"
          type="text"
          id="industria_Empresa"
          name="industria_Empresa"
        >
      
        <label for="">titulo de puesto</label>
        <input
        class="form-control mb-1"
        placeholder="titulo del puesto"
        type="text" 
        id="titleVacant"
        name="titleVacant"
        > 
       
        <label for="">lugar de empleo</label>
        <input
        class="form-control mb-2"
        placeholder="lugar de empleo"
        type="text"
        id="placeVacant" 
        name="placeVacant" 
        >
      
        <div class="" id="buttons">
          
        
          
          <input
          class="btn btn-primary"
          placeholder=""
          type="submit"
          id="btnContinuar1" 
          name="boton" 
          value="Guardar y continuar"
          
          >
        </div>
      
    </div>
    

    <div class="conten2" id="conten2">

      
      
        <h1>Especificaciones  del empleo</h1>
        <

        <p>¡Cuentas personas desea contratar para esta vacante?</p>
         <input
          placeholder="" 
          type="text"
          class=""
          id="numVacant"
          name="numVacant"
          >

        
        <br>
        <div class="" id="buttons">
          <input
          class="btn btn-primary"
          placeholder="guardar y continuar"
          type="submit"
          id="btnBack2" 
          name="boton" 
          value="Atras"
         
          >
          <input
          class="btn btn-primary"
          placeholder=""
          type="submit"
          id="btnContinuar2" 
          name="boton" 
          value="Guardar y continuar"
          
          >
        </div>

      
      
    </div>

    <div class="conten3" id="conten3">

      
     
        <h1>Agregar remuneracion</h1>
        <p>¿Cuales es el sueldo?</p>

        
        
        <label for="">minimo</label>
        <input
          placeholder="" 
          type="text"
          class=""
          id="salary"
          name="salary"
          >
        
          <label for="">tiempo de pago</label>
        <input
          placeholder="" 
          type="text"
          class=""
          id="timePayment"
          name="timePayment"
          >
        <br>
        <div class="" id="buttons">
          <input
          class="btn btn-primary"
          placeholder="guardar y continuar"
          type="submit"
          id="btnBack3" 
          name="boton" 
          value="Atras"
         
          >
          <input
          class="btn btn-primary"
          placeholder=""
          type="submit"
          id="btnContinuar3" 
          name="boton" 
          value="Guardar y continuar"
          
          >
        </div>

      
    </div>



    <div class="conten4" id="conten4">

      
      
        <h1>Describa la oferta de empleo</h1>
      <p>Descripcion del puesto</p>

        <p>Describa con detalle cuales son las caracteristicas de la oferta de empleo</p>
        
        
        <textarea
          cols="30"
          rows="10"
          class=""
          id="descVacant"
          name="descVacant"
          >
        </textarea>
        
        <br>
        <div class="" id="buttons">
          <input
          class="btn btn-primary"
          placeholder="guardar y continuar"
          type="submit"
          id="btnBack4" 
          name="boton" 
          value="Atras"
         
          >
          <input
          class="btn btn-primary"
          placeholder=""
          type="submit"
          id="btnContinuar4" 
          name="boton" 
          value="Guardar y continuar"
          
          >
        </div>

     
    </div>


    <div class="conten5" id="conten5">

      
      
        <h1>Preferecnias de postulacion</h1>
      <p>Le gustaria que los candidatos enviaran sus CV</p>


          
          <p>configuracion de alertas</p>
          <p>Enviar alertas cada vez que un usuario se haya postulado</p>
          
          <input type="text"
          placeholder=""
          class=""
          id="emailAlerts"
          name="emailAlerts"
          >
          <br>
          <div class="" id="buttons">
            <input
            class="btn btn-primary"
            placeholder="guardar y continuar"
            type="submit"
            id="btnBack5" 
            name="boton" 
            value="Atras"
           
            >
            <input
            class="btn btn-primary"
            placeholder=""
            type="submit"
            id="btnContinuar5" 
            name="boton" 
            value="Finalizar"
            
            >
          </div>

      
      <script src="formEmpresas.js"></script>
    </div>
  </form> 
</div>    
</body>
</html>