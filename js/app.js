var nombre = document.getElementById('nombre');
var apellido = document.getElementById('apellido');
var pais_nacimiento = document.getElementById('pais_nacimiento');
var fecha_nacimiento = document.getElementById('fecha_nacimiento');
var nombre_artistico = document.getElementById('nombre_artistico');
error.style.color = 'red';

function validarFormulario() {
  
  var mensajesError = [];
  if(nombre.value == null || nombre.value === '') {
    alert('Ingresa nombre');
    
  if(apellido.value == null || apellido.value === '') {
    alert('Ingresa apellido');
  }
   error.innerHTML = mensajesError.join(', '); 
  return false;
}
