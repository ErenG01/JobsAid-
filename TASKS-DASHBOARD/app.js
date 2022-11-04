$(document).ready(function(){
    console.log('funciona');

   
    $('#containerVacants').hide();
    $('#estadovacante').hide();
    
    

    $(document).on('click', '.publicOferts', function (e) {

       

        let adddiv = `<div id="adddiv"></div>`
        $('#container1').html(adddiv);
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
            $('#adddiv').html(div)
            }
        })
        e.preventDefault();
    })


    $(document).on('click', '.candidets', function (ev) {
        $('#second').remove();
        $('#adddiv').remove();
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
        $('#cont1').html(div)
        
        console.log("hecho");
        
       
        ev.preventDefault();
    })

    
    $(document).on('click', '.searchCV', function (ev) {
        $('#second').remove();
        $('#adddiv').remove();
        div = `
       
        <div id="second">
            <div class="ContainerHV">
                <div class="formHV">
                    <form action="">
                        <input type="search" placeholder="Profesion o habilidad">
                        <input type="search" placeholder="Cuidad o departamento">
                        <button>Buscar</button>
                    </form>
                </div>    
            </div>  
        </div>
   
        `
        $('#container3').html(div)
        
        console.log("hecho");
        
       
        ev.preventDefault();
    })

    $(document).on('click', '.btn', function () {
        let cuidad = $('#buscarsalariodesde').val();
        console.log('funciona');

    })




    
})