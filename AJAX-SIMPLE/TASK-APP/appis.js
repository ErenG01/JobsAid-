$(document).ready(function(){

    console.log("jQuery is working");

    $('#search').keyup(function(e){

        if ($('#search').val()) {
            let search = $('#search').val();
        $.ajax({
            url:'taski.php',
            type: 'post',
            data: { search },
            success: function(response){
                let task = JSON.parse(response);
                let template = '';
                task.forEach(task => {
                    template += `<li>
                    
                    ${task.usuario}
                    
                    </li>`
                });

                $('#container').html(template);
            }
        })
        }

    })

});