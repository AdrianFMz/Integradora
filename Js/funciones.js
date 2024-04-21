function MostrarC(){
$.get('../cursos/Mate/Tarea1.php',function(mensaje,estado){


document.getElementById('Contenido1').innerHTML = mensaje;


})

}