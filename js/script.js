//Crear una alerta
document.getElementById("Iniciarsesion").onclick = function cambiartexto(){
  //MODIFICAR UN ELEMENTO POR NOMBRE DE LA ETIQUETA
    alert ("Sesión Iniciada, feliz compra.");
  }

//Leer información del formulario
  document.getElementById("registro").onclick = function formulario(){
  var nombre= document.getElementById("nombre").value;
  alert ( nombre +" te has registrado efectivamente.");
} 

//Leer información del formulario
document.getElementById("enviar").onclick = function formulario(){
  var nombre= document.getElementById("nombre").value;
  var valor= document.getElementById("valor").value;
  var productos= document.getElementById("productos").value;
  alert ("La persona " + nombre +" ha hecho una compra de: " + valor);


}