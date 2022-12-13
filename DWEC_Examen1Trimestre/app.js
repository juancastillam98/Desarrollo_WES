//Elemento
const imagen = document.querySelector("#imagenPrincipal");

//eventos
eventListeners();
function eventListeners() {
    imagen.addEventListener("click", mostrarMensaje);
    imagen.addEventListener("mouseover", mostrarMensaje);
}

function mostrarMensaje() {
    console.log("Has hecho click u hover")
}