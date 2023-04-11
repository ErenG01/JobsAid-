var btncontinue1 = document.getElementById('btnContinuar1');
var btncontinue2 = document.getElementById('btnContinuar2');
var btncontinue3 = document.getElementById('btnContinuar3');
var btncontinue4 = document.getElementById('btnContinuar4');
var btncontinue6 = document.getElementById('btnContinuar5');


var btnAtras2 = document.getElementById('btnBack2');
var btnAtras3 = document.getElementById('btnBack3');
var btnAtras4 = document.getElementById('btnBack4');
var btnAtras5 = document.getElementById('btnBack5');

var content2 = document.getElementById('conten2').style.display = 'none';
var content3 = document.getElementById('conten3').style.display = 'none';
var content4 = document.getElementById('conten4').style.display = 'none';
var content5 = document.getElementById('conten5').style.display = 'none';

/*FUNCIONES SOLO PARA CONTINUAR*/
btncontinue1.addEventListener("click", function(evento){

    evento.preventDefault();
    var content1 = document.getElementById('conten1').style.display = 'none';
    var content2 = document.getElementById('conten2').style.display = 'block';
    
});

btncontinue2.addEventListener("click", function(evento){

    evento.preventDefault();
    var content1 = document.getElementById('conten2').style.display = 'none';
    var content2 = document.getElementById('conten3').style.display = 'block';
    
});

btncontinue3.addEventListener("click", function(evento){

    evento.preventDefault();
    var content1 = document.getElementById('conten3').style.display = 'none';
    var content2 = document.getElementById('conten4').style.display = 'block';
    
});


btncontinue4.addEventListener("click", function(evento){

    evento.preventDefault();
    var content1 = document.getElementById('conten4').style.display = 'none';
    var content2 = document.getElementById('conten5').style.display = 'block';
    
});
/*FUNCIONES SOLO PARA RETOCREDER*/ 


btnAtras2.addEventListener("click", function(evento){

    evento.preventDefault();
    var content1 = document.getElementById('conten1').style.display = 'block';
    var content2 = document.getElementById('conten2').style.display = 'none';
    
});

btnAtras3.addEventListener("click", function(evento){

    evento.preventDefault();
    var content1 = document.getElementById('conten2').style.display = 'block';
    var content2 = document.getElementById('conten3').style.display = 'none';
    
});

btnAtras4.addEventListener("click", function(evento){

    evento.preventDefault();
    var content1 = document.getElementById('conten3').style.display = 'block';
    var content2 = document.getElementById('conten4').style.display = 'none';
    
});

btnAtras5.addEventListener("click", function(evento){

    evento.preventDefault();
    var content1 = document.getElementById('conten4').style.display = 'block';
    var content2 = document.getElementById('conten5').style.display = 'none';
    
});

