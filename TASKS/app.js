$(document).ready(function(){

    console.log("holamundo");

    $.ajax({
        url: 'TASKS/task-list.php',
        type: 'GET',
        success: function(response){
            let tasks = JSON.parse(response);
            let div = '';
            tasks.forEach(task => {
                div += `
                <div class="MainContainerJob" id="MainContainerJob" vacantid="${task.id}">
                  <a hfre="#" id="Avancant">
                  <h4 class="h4">${task.titulovacante}</h4>
                  <p>${task.industria}</p>
                  <p>${task.lugarempleo}</p>
                  <hr>
                  <ul>
                      <li><p>Salario:${task.salary}</p></li>
                      <li><p>${task.descvacante}</p></li>
                      <li><p>Horario: lunes a viernes de 7:00am a 5:30pm</p></li>
                  </ul>
                  <hr>
                  
                  <p>${task.type}</p>
                  
                  
                  <p>publicado hace mas de 30 dias de Bogota,Cundinamarca</p>
                  </a>
                </div>`
            });
            $('#MainContainerJobs').html(div)
            
        }
    })

    $(document).on('click', '#Avancant', function(e){
        $('#AsideContainerJob').remove();
        let element = $(this)[0].parentElement;
        let idv = $(element).attr('vacantid');
        console.log(idv);
        $.post('TASKS/task-show.php', {idv}, function(response) {
            const task = JSON.parse(response);
            const valor = `
            <aside class="AsideContainerJob" id="AsideContainerJob" vacantid="${task.id}">
            <h4 class="h4">${task.titulovacante}</h4>

            <p class="font-weight-bold"></p>
            <p>${task.industria}</p>
            <p>${task.lugarempleo}</p>
            
            <button
                  class="btn btn-primary" id="postularse">Postularse</button
                  type="submit"
              >
            <button
                class="btn btn-primary">✰</button
                type="submit"
              >
            <hr> 
            <p>${task.descvacante}</p>
            <hr>
            <p>¿Que te ofrecemos?</p>
              <br>
              <h4 class="font-weight-bold">Salario:${task.salary}</h4>
              <br>
              <h4 class="font-weight-bold">Horarios:</h4>
              <br>
              <h4 class="font-weight-bold">Lugar:${task.lugarempleo}</h4>
              <br>
            <p>Si te encuentras interesado y cumples con el perfil, postúlate!</p>  
            <hr>
            
            <button
                class="btn btn-primary" id="postularse">Postularse al empleo</button
                type="submit"
              >
            
            <button
                class="btn btn-primary">Postularse</button
                type="submit"
              >
            </aside>  
              `;
            $('#asidecontainervacantes').html(valor);
            e.preventDefault();
        })
    })

    $(document).on('click', '#btnFiltroVer', function (eve) {
      let cuidad= $('#buscadepartamento').val();
      let sala_desde = $('#buscarsalariodesde').val();
      let sala_hasta = $('#buscarsalariohasta').val();
      let type_emple = $('#tipodeEmpleo').val();
      let modalidad = $('#modalidad').val();
      $.ajax({
        url: 'TASKS/task-filtro.php',
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
          $('#MainContainerJob').html(div)
        }        
        
      })
      eve.preventDefault();
  })


  $(document).on('click', '#postularse', function(){
    
    var resultado = window.confirm('Estas seguro?');
      if (resultado === true) {
        let element = $(this)[0].parentElement;
        let idv = $(element).attr('vacantid');
        $.post('TASKS/task-add.php', {idv}, function(response) {
            console.log(response);
            console.log('se postulo correctamente');
        });
    
        
      } else { 
          console.log('no se postulo')
      }

  })
  

});