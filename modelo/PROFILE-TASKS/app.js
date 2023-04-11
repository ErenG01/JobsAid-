$(document).ready(function(){

    console.log('funciona');

    $.ajax({
        url: '../modelo/PROFILE-TASKS/task-perfil.php',
        type: 'GET',
        success: function (response) {
            let tasks = JSON.parse(response);
            let include = `
            <div class="between">
            <div class="InfoPerfilBox">
              
                <img class="imgPerfil" src="${tasks[0]['picture']}" alt="" >
                
                <h1 class="font-weight-bold">${tasks[0]['nombre']}</h1>
                <h1 class="font-weight-bold">${tasks[0]['lastname']}</h1>
                <p>${tasks[0]['profession']}</p>
                <p>${tasks[0]['city']}</p>
                
                <hr>
                <h1 class="font-weight-bold">Archivo subido</h1>
                <img src="img/CV_3.png" alt=""  class="ImgCV" style="width: 150px;">
                <p>${tasks[0]['archivo']}</p>
                <hr>
                <h1 class="font-weight-bold">informacion de contacto</h1>
                <p>${tasks[0]['email']}</p>
                <p>${tasks[0]['phone']}</p>
            </div>
        </div>`;
        $('#containerprofile').html(include);
        }
    })


//MOSTRAR CONTAINER DE PERFIL USUARIO
    $.ajax({
        url: '../modelo/PROFILE-TASKS/task-show-pict.php',
        type: 'GET',
        success: function (response) {
            let tasks = JSON.parse(response);
            let include = `
            <div class="formularioPerfil">
            <img src="${tasks[0]['picture']}" class="imgPerfil2" alt="foto perfil">

        <form name="formUpPicture" id="formUpPicture" methods="POST" enctype="multipart/form-data" action="">
        <h2>${tasks[0]['name']}</h2>
        <input type="file" id="upPicture" name="upPicture">
        <br>
        <button class="btn btn-primary " id="btnPerfil">cambiar foto de perfil</button>
        
        </form>
        </div>`;
        $('#perfil').html(include);
        }
    })

    $(document).on('click', '#profile', function(event) {
        $('.between').remove();
        $.ajax({
            url: '../modelo/PROFILE-TASKS/task-show-pict.php',
            type: 'GET',
            
            success: function (response) {
                let tasks = JSON.parse(response);
                let include = `
                <div class="between">
                <div class="InfoPerfilBox">

                <img class="imgPerfil" src="${tasks[0]['picture']}" alt="" >
                <h1 class="font-weight-bold">${tasks[0]['nombre']}</h1>
                <h1 class="font-weight-bold">${tasks[0]['lastname']}</h1>
                <p>${tasks[0]['profession']}</p>
                <p>${tasks[0]['city']}</p>
                
                <hr>
                <h1 class="font-weight-bold">Archivo subido</h1>
                <img src="img/CV_3.png" alt=""  class="ImgCV" style="width: 150px;">
                <p>CVSofiarodriguez.pdf</p>
                <hr>
                <h1 class="font-weight-bold">informacion de contacto</h1>
                <p>${tasks[0]['email']}</p>
                <p>${tasks[0]['phone']}</p>
            </div>
        </div>
        `;
        $('#containerprofile').html(include)
            }
        })
        
    
        event.preventDefault();
    })



    $(document).on('click', '#applications', function(event) {
       $('.between').remove();
       let cont = `<div class="containerpostulacion" id="containerpostulacion">

       </div>`;
       $('#containerprofile').html(cont);
        $.ajax({
            url: '../modelo/PROFILE-TASKS/task-oferts.php',
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
            url: '../modelo/PROFILE-TASKS/task-user.php',
            type: 'GET',
            success: function(response) {
                let tasks = JSON.parse(response);
                
                const div = `
                <div class="between">
                <div class="settingsbox">
    
                <h1 class="font-weight-bold">Configuracion de cuenta</h1>
                <hr>
                <p class="font-weight-bold">Nombre</p>
                <p>${tasks[0]['nombre']}</p>
                <hr>
                <p class="font-weight-bold">apellido</p>
                <p>${tasks[0]['apellido']}</p>
                <hr>
                <p class="font-weight-bold">Nombre de usuario</p>
                <p>${tasks[0]['usuario']}</p>
                <hr>
                <p class="font-weight-bold">correo</p>
                <p>${tasks[0]['email']}</p>
                <hr>
                <p class="font-weight-bold">Contraseña</p>
                <p>${tasks[0]['password']}</p>
                <hr>
                <p class="font-weight-bold">telefono</p>
                <p>${tasks[0]['telefono']}</p>
                <hr>
                <p>Eliminar cuenta</p>
                <button class="btn btn-primary" id="editdates"name="editardates" type="submit">Editar datos</button>

                </div>

            </div>  `
            $('#containerprofile').html(div)
            
            }
        })
       
        event.preventDefault();
    })

    $(document).on('click', '#cv', function(e) {
        $('.between').remove();
        e.preventDefault();
        $.ajax({
            url: '../modelo/PROFILE-TASKS/task-cv.php',
            type: 'GET',
            success: function(response) {
                let tasks = JSON.parse(response);
                let include = `
                
                    <div class="between">
                    <div class="minicontainerUpCV">
                    <h1>actualizar o subir CV</h1>
                    <input type="file" name="upCV" id="upCV">
                    <button class="btn btn-primary" id="enviaCV"name="enviaCV" type="submit">subir CV</button>
                    </div>
                    <div class="minicontainerCV">

                    <embed src="img/uploads/hola.pdf" type="" width="700" height="600" ">
                    </div>
                    </div>
                
                `;
                
                console.log(include);
                $('#containerprofile').html(include);
            }
            
        })
       
      
    })

    $(document).on('click', '#editdates', function(e){
        $('.between').remove();

        $.ajax({
            url: '../modelo/PROFILE-TASKS/task-info-user.php',
            type: 'GET',
            success: function(response) {
                let tasks = JSON.parse(response);
                let include = `
                    <div class="between">
                        <div class="formEditDates">
                            <form action="">
                            <label for="">nombre</label>
                            <input type="text" class="form-control" id="nombre"required>
                            <label for="">apellido</label>
                            <input type="text" class="form-control" id="apellidoUser"  required>
                            <label for="">nombre de usuario</label>
                            <input type="text" class="form-control" id="nombredeusuario"  required>
                            <label for="">email</label>
                            <input type="text" class="form-control" id="correoUser"  required>
                            <label for="">contraseña</label>
                            <input type="text" class="form-control" id="contraseña"  required>
                            <label for="">numero de telefono</label>
                            <input type="text" class="form-control" id="telefono"  required>
                            
                            <input type="submit" class="btn btn-primary" id="btnUpdateDates" >HECHO</button>

                            </form>
                        </div>
                    </div>
                `;
                $('#containerprofile').html(include);
            }
        })
        e.preventDefault();
    })

    $(document).on('click', '#btnUpdateDates', function (e) {
        
        let name= $('#nombre').val();
        let lastname = $('#apellidoUser').val();
        let username = $('#nombredeusuario').val();
        let email = $('#correoUser').val();
        let passw = $('#contraseña').val();
        let numberphone = $('#telefono').val();
        
        $('.between').remove();
        $.ajax({
            url: '../modelo/PROFILE-TASKS/task-update-user.php',
            type: 'POST',
            data: {nombre: name,
                apellido: lastname,
                nombreUsuario: username,
                correo: email,
                contraseña: passw,
                numerotelef: numberphone},
            success: function (response) {
                let tasks = JSON.parse(response);
                
                const div = `
                <div class="between">
                    <div class="settingsbox">
                    
                        <h1 class="font-weight-bold">¡SUS DATOS SE ACTUALIZARON!</h1>
                        <hr>
                        <p class="font-weight-bold">Nombre</p>
                        <p>${tasks[0]['nombre']}</p>
                        <hr>
                        <p class="font-weight-bold">Apellido</p>
                        <p>${tasks[0]['lastname']}</p>
                        <hr>
                        <p class="font-weight-bold">Nombre de usuario</p>
                        <p>${tasks[0]['usuario']}</p>
                        <hr>
                        <p class="font-weight-bold">Email</p>
                        <p>${tasks[0]['email']}</p>
                        <hr>
                        <p class="font-weight-bold">Contraseña</p>
                        <p>${tasks[0]['password']}</p>
                        <hr>
                        <p class="font-weight-bold">telefono</p>
                        <p>${tasks[0]['phone']}</p>
                        <hr>
                        
                        <p>Eliminar cuenta</p>
                        <button class="btn btn-primary" id="editdates"name="editardates" type="submit">Editar datos</button>

                    </div>

            </div>
              `;
            $('#containerprofile').html(div);
                console.log(div);
            }
        })
        e.preventDefault();
    })

    $(document).on('click', '#enviaCV', function(eve) {
        eve.preventDefault();
        // let formulario = document.getElementById('#formularioCV');
        var archivo = new FormData(document.getElementById('formularioCV'));
        console.log("fhola");
        $.ajax({
            url: '../modelo/PROFILE-TASKS/task-archivo.php',
            type: 'POST',
            data: archivo,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
            }
        });
       console.log(archivo);
        
    })


    $(document).on('click', '#btnPerfil', function(){

        
        var archivo = new FormData(document.getElementById('formUpPicture'));
        $('#formularioPerfil').remove();
        $.ajax({
            url: '../modelo/PROFILE-TASKS/task-picture.php',
            type: 'POST',
            data: archivo,
            contentType: false,
            processData: false,
            success: function (response) {
                let task = JSON.parse(response);
                let include = `
                
                <form name="formUpPicture" id="formUpPicture" methods="POST" enctype="multipart/form-data" action="">
                <img src="${task[0]['picture']}" alt="" style="width: 250px;">
                <p>carlos antonio</p>
                <input type="file" id="upPicture" name="upPicture">
                <button class="btn btn-primary " id="btnPerfil">cambiar foto de perfil</button>
                </form>
                `;
            }
        });
       console.log(archivo);


    })
   
})