<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    
    
    <div class="containerOpciones">
        <div class="uls">
            <li>Publicar Empleo</li>
            <li>Candidatos</li>
            <li>Buscar empleados</li>
            <li>campañas</li>
            <li>entrevistas</li>
            <li>salir</li>    
        </div>
    </div>
    <header>
       <?php include("navEmployeed.php");?> 
    </header>
    
    <div class="principal">

        <h3>Empleos</h3>


    </div>
    <div class="filtro">
        <input
        type="text"
        placeholder="Buscar titulos de empleos"
        name=""
        id=""
        class=""
        >
        <input
        type="text"
        placeholder="lugar de empleo"
        name=""
        id=""
        class=""
        >
        <label for="">ordenar por</label>
        <input
        type="text"
        placeholder="lugar de empleo"
        name=""
        id=""
        class=""
        >
        <label for="">orden</label>
        <input
        type="text"
        placeholder="Descendente"
        name=""
        id=""
        class=""
        >

    </div>

    <div class="containerVacants">

        <p>nombre de la vacante</p>
        <p>lugar</p>
        <p>fecha de creacion</p>

        <label for="">estado del empleo</label>
        <input
        type="text"
        placeholder="lugar de empleo"
        name=""
        id=""
        class=""
        >
    </div>
    

    </div>
</body>
</html>