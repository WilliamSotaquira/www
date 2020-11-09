var paginaActiva = 0;
var animaciones = [];
/*----------------------------------------
                zoom
------------------------------------------*/

$(window).resize(function() {
    window.zoom();
});


$(document).ready(function(){
    //ANIMACIONES GLOBALES
    window.crearAnimaciones();

window.init();

    
    $('#adelante').click(function(){
        window.avanzarPagina();
    })
    
    $('#atras').click(function(){
        window.retrocederPagina();
    })

})

function crearAnimaciones(){
   for(var i = 0; i < $('section').length; i++){
        window.animaciones[i] = window.animacionGlobal(i);
    } 
}

function zoom(){ 
   var altura = window.innerHeight;
   var ancho = window.innerWidth;
   var html = $("html");
   var zoom; 
   
   if(altura <= ancho){
     zoom = altura/1536;
   }else{
     zoom = ancho/2048;
   }
    
   $(html).css("zoom", zoom);   
}


function init(){
    window.zoom();
    var btnAdelante = '<button class="boton adelante" id="adelante">Adelante</button>';
    var btnAtras = '<button class="boton atras" id="atras">Atrás</button>';
    var botones = btnAdelante + btnAtras;
    
    $('body').append(botones);
    
    $('section').hide();
    window.mostrarPagina(0);
}

function mostrarPagina(nuevaPagina){
    
    $('#pag-' + window.paginaActiva).hide();
    $('#pag-' + nuevaPagina).show();
    
    window.paginaActiva = nuevaPagina;
    
    window.mostrarOcultar();
    window.animaciones[nuevaPagina]();
}

function mostrarOcultar (){
    switch(window.paginaActiva){
            
        case 0:
           $("#adelante").show();
            $("#atras").hide();
           break;
            
        case 1:
            $("#atras").show();
            $("#adelante").show();
            break;
        case 2:$("#atras").show();
            $("#adelante").show();
            break;
        case 3:$("#atras").show();
            $("#adelante").show();
            break;
        case 4:$("#atras").show();
            $("#adelante").show();
            break;
        case 5:$("#atras").show();
            $("#adelante").show();
            break;
        case 6:$("#atras").show();
            $("#adelante").show();
            break;
        case 7:
            $("#atras").show();
            $("#adelante").hide();
            break;

    }
     
}

function avanzarPagina(){
    var nuevaPag = window.paginaActiva +1;
    mostrarPagina(nuevaPag);
}

function retrocederPagina(){
    var anteriorPag = window.paginaActiva -1;
    mostrarPagina(anteriorPag);
}


function animacionGlobal(numero){
    TweenMax.killAll(true);
    var pagina = '#pag-' + numero;
    return function(){
        TweenMax.from($(pagina), 0.5, {opacity: 0});
    }
}



/*----------------------------------------
          navegacion con flechas
------------------------------------------*/

document.onkeydown = checkKey;



function checkKey(e) {
    e = e || window.event;
    
       if (e.keyCode == '0') {
       // left arrow
           if(window.paginaActiva !== 0){
                retrocederPagina();
           }
       }
    else if (e.keyCode == '7') {
       // right arrow
           if(window.paginaActiva !== 7){
                avanzarPagina();
           }
        
       } 
    }

