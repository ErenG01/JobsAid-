$(document).ready(function(){
    console.log('funciona');

   
    
    
    
    

    $(document).on('click', '.publicOferts', function (e) {

       
        let barraEstado = `<h3>Empleos</h3>
        <div class="estadovacante" id="estadovacante">
            <div class="BtnEstado">
                <button>Disponible</button>
                <button>Cerrado</button>
            </div>
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
`;
        let containerdivs = `<div class="containerdivs" id="containerdivs"></div>`;
        let filtro = `
        <div class="filtro" id="filtro">
            <table class="table">
            <thead>
                <tr class="filters" style="margin: auto;">
                    <form id="formularioIndex" class="" name="formularioIndex" action="index.php" method="POST"> 
                                <th>
                                        Ciudad
                                        <select  id="buscadepartamento" name="buscadepartamento" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                               
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
                                                
                                                <option value=""></option>
                                                <option  value="Presencial">Presencial</option>
                                                <option  value="Virtual">Virtual</option>
                                                <option  value="Hibrido">Hibirido</option>
                                        </select>
                                </th>
                                <th>
                                    <input type="submit"  class="btn btn-primary" id="btnFiltroVer" value="Ver" style="">

                                </th>                                               
                    </form>
                </tr>   
            </thead>
            </table>          
        </div>
        `; 
        let containerOverflow = `<div class="overflowcontainer" id="overflowcontainer"></div>`;
        $('#subcontainer2').html(containerdivs);
        $('#containerdivs').html(filtro+containerOverflow);
        
        $('#second').remove();
        $.ajax({
            url: 'TASKS-DASHBOARD/task-list.php',
            type: 'GET',
            success: function(response){
               
                let tasks = JSON.parse(response);
                let div = '';
                tasks.forEach(task => {
                div += `
                <div id="second">
                
                <div class="MainContainerJob" id="MainContainerJob" vacantid="${task.id}">
                
                    <div class="estadovacante" id="estadovacante">
                        <div class="BtnEstado">
                            <button>Disponible</button>
                            <button>Cerrado</button>
                        </div>
                    </div>
                
                
                <h4 class="h4">${task.titulovacante}</h4>
                <p>${task.industria}</p>
                <p>${task.lugarempleo}</p>
                <br>
                <ul>
                    <li><p>Salario:${task.salary}</p></li>
                    <li><p>${task.descvacante}</p></li>
                    <li><p>Horario: lunes a viernes de 7:00am a 5:30pm</p></li>
                </ul>
      
                <br>
                <p>${task.type}</p>
                <p>publicado hace mas de 30 dias de Bogota,Cundinamarca</p>
                </div>
                </div>
                `
            });
           
            $('#overflowcontainer').html(div);
            }
        })
        e.preventDefault();
    })

    ///////////////////////FILTRO BUSQUEDA//////////////////////////

    $(document).on('click', '#btnFiltroVer', function (eve) {
        let cuidad= $('#buscadepartamento').val();
        let sala_desde = $('#buscarsalariodesde').val();
        let sala_hasta = $('#buscarsalariohasta').val();
        let type_emple = $('#tipodeEmpleo').val();
        let modalidad = $('#modalidad').val();
        $.ajax({
          url: 'TASKS-DASHBOARD/task-filtro.php',
          type: 'POST',
          data: { city: cuidad,
                  salariodesde: sala_desde,
                  salariohasta: sala_hasta,
                  tipoempleo: type_emple,
                  modality: modalidad},
          success: function(response){
            let tasks = JSON.parse(response);
            let div = '';
            tasks.forEach(task =>{
              div += `
              <div class="MainContainerJob" id="MainContainerJob" vacantid="${task.id}">
              <h4 class="h4">${task.titulovacante}</h4>
              <p>${task.industria}</p>
              <p>${task.lugarempleo}</p>
              <br>
              <ul>
                  <li><p>Salario:${task.salary}</p></li>
                  <li><p>${task.descvacante}</p></li>
                  <li><p>Horario: lunes a viernes de 7:00am a 5:30pm</p></li>
              </ul>
    
              <br>
              <p>${task.type}</p>
              <button
              id="enviarbt"
              class="enviarbt btn btn-primary">enviar</button
              type="submit"
              >
              <p>${task.id}</p>
              <p>publicado hace mas de 30 dias de Bogota,Cundinamarca</p>
              </div>`
            });
            $('#overflowcontainer').html(div)
          }        
          
        })
        eve.preventDefault();
    })


    $(document).on('click', '.candidets', function (ev) {
        $('#containerdivs').remove();
        
        div = `
       
        <div id="second">
            <div class="ContainerCandidatos" id="ContainerCandidatos">
            
            <div class="candidatos">
                <div class="infoUsuario">
                    <ul>
                        <li>nombre</li>
                        <li>apellido</li>
                        <li>correo</li>
                        <li>telefono</li>
                    </ul>
                </div>
            </div> 
            </div>    
        </div>    
        `
        $('#subcontainer2').html(div)
        
        console.log("hecho");
        
       
        ev.preventDefault();
    })

    
    $(document).on('click', '.searchCV', function (ev) {
        $('#containerdivs').remove();
        
        div = `
       
        <div id="second">
            <div class="ContainerHV" id="ContainerHV">
                <div class="formHV">
                    <form action="">
                        <input type="text" class="inputProfesion" id="inputProfesion"placeholder="Profesion o habilidad">
                        <input type="text" class="inputCiudad" id="inputCiudad" placeholder="Cuidad o departamento">
                        <button id="btnSearchCv" class="btnSearchCv">Buscar</button>
                    </form>
                </div>    
            </div>
            <div id="containerCVS">
            
            
            </div>  
        </div>
   
        `
        $('#subcontainer2').html(div)
        
        console.log("hecho");
        
       
        ev.preventDefault();
    })


    $(document).on('click', '#btnSearchCv', function (e) {
        let profesion = $('#inputProfesion').val();
        let ciudad = $('#inputCiudad').val();

        if (profesion =="" && ciudad == "") {
            console.log("no hay nada");
            $('#InfoPerfilBox').remove();
        }else{
            $.ajax({
                url: 'TASKS-DASHBOARD/task-searchCv.php',
                type: 'POST',
                data: {titulo: profesion,
                        city: ciudad},
                success: function(response) {
                    let tasks = JSON.parse(response);
                    let include = "";
                    tasks.forEach(task => {
                        include =`
                        
                        <div class="InfoPerfilBox" id="InfoPerfilBox">
                
                            <img class="imgPerfil" src="${task['picture']}" alt="" >
                            
                            <p class="font-weight-bold">${task['nombre']}</p>
                            <p class="font-weight-bold">${task['apellido']}</p>
                            <p>${task['profession']}</p>
                            <p>${task['city']}</p>
                            <p>Cundinamarca</p>
                            <hr>
                            <h4 class="font-weight-bold">Archivo subido</h4>
                            <img src="img/CV_3.png" alt=""  class="ImgCV" style="width: 100px;">
                            <p>${task['cv']}</p>
                            <hr>
                            <h4 class="font-weight-bold">informacion de contacto</h4>
                            <p>${task['email']}</p>
                            <p>${task['telefono']}</p>
                        </div>
                        `;
                        $('#containerCVS').html(include);
                        
                    });
                    console.log(tasks);
                }
            })
        }    
        e.preventDefault();
        
        
    })

   




    
})