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

//LLAMAR UNA FUNCIÓN CON PONER EL MOUSE ENCIMA
document.getElementById("cambioimg").onmouseover = function() {mouseOver()};
document.getElementById("cambioimg").onmouseout = function() {mouseOut()};
var imagen = document.getElementById("cambioimg");

//LLAMAR UNA FUNCIÓN CON PONER EL MOUSE ENCIMA
document.getElementById("cambioimg1").onmouseover = function() {mouseOver1()};
document.getElementById("cambioimg1").onmouseout = function() {mouseOut1()};
var imagen1 = document.getElementById("cambioimg1")

//mouse encima
function mouseOver() {
    imagen.attributes[0].value = "images/coleccion1.jpg";
    imagen.attributes[1].value = "100%";
  }
  
  //mouse afuera
  function mouseOut() {
    imagen.attributes[0].value = "images/6.PNG";
    imagen.attributes[1].value = "100%";
  }
  
  //mouse encima
function mouseOver1() {
    imagen1.attributes[0].value = "images/coleccion4.jpg";
    imagen1.attributes[1].value = "100%";
  }
  
  //mouse afuera
  function mouseOut1() {
    imagen1.attributes[0].value = "images/coleccion5.jpg";
    imagen1.attributes[1].value = "100%";
  }
  