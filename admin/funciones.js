function principal(){

  $.ajax({

    url:'prueba.php'
   
})

  .done(function(res){
	$('#respuesta').html(res);

})

}
function insertar(){

var nombre= document.getElementById('nombre').value;
  var descripcion = document.getElementById('descripcion').value
  var video = document.getElementById('video').value
 

var datos= "nombre="+nombre_+"&descripcion="+descripcion+"&video="+video;
   
$.ajax({

    url:'nueva_palabra.php',
    type:'POST',
    data:datos
})
.done(function(res){
  $('#respuesta').html(res);

})

}



//buscador de contenido
/*
document.getElementById("inputSearch").addEventListener("keyup",ocultar_buscador):


function ocultar_buscador(){

 


  if (inputSearch.value=="") {
    box_search2.style.display = "none"
  }

}*/
