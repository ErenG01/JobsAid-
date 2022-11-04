$(document).ready(function(){

    console.log('funciona');

    $(document).on('click', '#profile', function(event) {
        $('.between').remove();
        let include = `
        <div class="between">
            <div class="InfoPerfilBox">

                <img class="imgPerfil" src="img/Perfil.png" alt="" >
                <h1 class="font-weight-bold">Sofia Rodriguez</h1>
                <p>Asistente Administrativo</p>
                <p>Bogota</p>
                <p>Cundinamarca</p>
                <hr>
                <h1 class="font-weight-bold">Archivo subido</h1>
                <img src="img/CV_3.png" alt=""  class="ImgCV" style="width: 150px;">
                <p>CVSofiarodriguez.pdf</p>
                <hr>
                <h1 class="font-weight-bold">informacion de contacto</h1>
                <p>sofiarodriguez12@gmail.com</p>
                <p>3133095358</p>
            </div>
        </div>
        `
    $('#containerprofile').html(include)
        event.preventDefault();
    })



    $(document).on('click', '#applications', function(event) {
       $('.between').remove();
       let cont = `<div class="containerpostulacion" id="containerpostulacion">

       </div>`;
       $('#containerprofile').html(cont);
        $.ajax({
            url: 'PROFILE-TASKS/task-oferts.php',
            type: 'GET',
            success: function(response) {
                let tasks = JSON.parse(response);
                let div = '';
                tasks.forEach(task => {
                    div += `
                    <div class="between">
                    <div class="postulacionesBox">
        
                    <h1>Mis postulaciones</h1>
                    
                        <div class="MainContainerJob">
                            <h1 class="font-weight-bold">${task.titulovacante}</h1>
                            <p>${task.industria}</p>
                            <p>${task.lugarempleo}</p>
                        <br>
                        <p>${task.descvacante}</p>
                    
                            <br>
                            <p>publicado hace mas de 30 dias de Bogota,Cundinamarca</p>
                        </div>
                    
                        <a href="index.php" class="btn btn-primary" name="Ver empleos" type="submit">Ver mas Empleos</a>
                    </div>
                </div>  
                `;
               
                })
                $('#containerpostulacion').html(div)
                console.log(tasks);
            }
        })
        
        
        event.preventDefault();
        
    })




    $(document).on('click', '#emailBox', function(event) {
        $('.between').remove();
        let include = `
        <div class="between">
            <div class="postulacionesBox">

                <h1>Mis bandeja de entrada</h1>
                
                <p>no tienes mensajes</p>
                <button class="btn btn-primary" name="Ver empleos" type="submit">Ver mas Empleos</button>
            </div> 
        </div>  
        `
    $('#containerprofile').html(include)
        event.preventDefault();
    })

    $(document).on('click', '#settings', function(event) {
        $('.between').remove();
        $.ajax({
            url: 'PROFILE-TASKS/task-user.php',
            type: 'GET',
            success: function(response) {
                let tasks = JSON.parse(response);
                let nom = tasks.nombre;
                const div = `
                <div class="between">
                <div class="settingsbox">
    
                <h1 class="font-weight-bold">Configuracion de cuenta</h1>
                <hr>
                <p class="font-weight-bold">Nombre de usuario</p>
                <p>${tasks[0]['nombre']}</p>
                <hr>
                <p class="font-weight-bold">Email</p>
                <p>${tasks[0]['email']}</p>
                <hr>
                <p class="font-weight-bold">Contraseña</p>
                <p>${tasks[0]['password']}</p>
                <hr>
                <p class="font-weight-bold">Numero de telefono</p>
                <p></p>
                <hr>
                <p>Eliminar cuenta</p>
                </div>
            </div>  `
            $('#containerprofile').html(div)
            
            }
        })
       
        event.preventDefault();
    })


    
})