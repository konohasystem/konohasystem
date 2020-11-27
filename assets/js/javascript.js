$(document).ready(function(){
    
    $("h1").html("Renombrar h1");  //aplica el cambio de contenido a todos los h1 de mi index
    $(".miClase").html("Renombrar desde clase"); //aplicar cambio de contenido con una clase
    $("#idP").html("nuevo valor a traves de  id"); //aplicar cambio de contenido con un id
    
    $("h1:last").html("ultimo h1 modificado"); //modificar el ultimo h1
    
    $(".claseDiv p").html("modificar parrafo dentro de div"); //modificar contenido etiqueta p dentro de la clase claseDiv
    
    /*agregar y quitar clases de estilos con jquery*/
    
    $("p").addClass("agrandar rojo fondoAzul");
    $("p:last").removeClass("agrandar");
    
    /*agregar estilos css con jquery*/
    
    $("h1:last").css("background-color","green");
    $("h1:first").css({margin:"100px",color:"aqua",background:"black"});
    
    /*ocultar elementos*/
    $("h1:first").hide(2000); //2000 milisegundos = 2 segundos
    
    /*mostrar elementos*/
     $("h1:first").show(2000);
    
    /*agregar atributos con jquery al html*/
    
    $("img:first").attr("src","https://intranet.cftsanagustin.cl/images/logo.png");
    $("#segundaImg").attr("src","http://media.biobiochile.cl/wp-content/uploads/2016/03/61.jpg");
    $("#segundaImg").attr("width","800px");

});

