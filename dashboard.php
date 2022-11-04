<?php



?>
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
        <img src="img/Logo_V2.png" alt="">
        <div class="uls">
            <li class=""><a href="" class="publicOferts">Publicar Empleo</a></li>
            <li class=""><a href="" class="candidets">Candidatos</a></li>
            <li class=""><a href="" class="searchCV">Busca CV</a></li>
            <li class=""><a href="">Vacantes</a></li>
            <li class=""><a href="">Entrevistas</a></li>
            <li class=""><a href="salir.php">Salir</a></li>
        </div>
    </div>
    
    
    <div class="principal">

        <h3>Empleos</h3>


    </div>
    <div class="estadovacante" id="estadovacante">
        <div class="BtnEstado">
            <button>Disponible</button>
            <button>Cerrado</button>
        </div>
    </div>

   
            
    <div class="filtro" id="filtro">
        <table class="table">
            <thead>
                <tr class="filters" style="margin: auto;">
                    <form id="formularioIndex" class="" name="formularioIndex" action="index.php" method="POST"> 
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
                                        <input type="text" id="buscarsalariodesde" name="buscarsalariodesde" class="form-control mt-2"  style="border: #bababa 1px solid; color:#000000;" >
                                </th>
                                <th>
                                        Salario hasta:
                                        <input type="text" id="buscarsalariohasta" name="buscarsalariohasta" class="form-control mt-2"  style="border: #bababa 1px solid; color:#000000;" >
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
                                <th>
                                    <input type="submit"  class="btn btn-primary"  value="Ver" style="">

                                </th>                                               
                    </form>
                </tr>   
            </thead>
        </table>          
    </div>
    
    <div class="containerVacants" id="containerVacants">

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

   
    
    <div class="container1" id="container1">

    </div>
    
   
   

    <div class="cont1" id="cont1">
    
    </div>

    <div class="container3" id="container3">

    </div>

    <table>
        <thead>
            <tr>
                <td></td>
            </tr>
        </thead>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="TASKs-DASHBOARD/app.js"></script>
    
    
</body>
</html>