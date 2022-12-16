//Elemento
const imagen = document.querySelector("#imagenPrincipal");
const contenedor = document.querySelector("div")

setTimeout(() => {
    console.log("Hola");
}, 3000)

//eventos
eventListeners();
function eventListeners() {
    // imagen.addEventListener("click", mostrarMensaje);
    imagen.addEventListener("mouseover", mostrarMensaje);
    //contenedor.addEventListener("mouseenter", () => { console.log("Entrando en el contenedor") })
}

function mostrarMensaje() {


    /*
    //creo el bloque que contendrá la imagen
    const bloqueImagen = document.createElement("div");
    bloqueImagen.classList = "posicion";

    //creo ahora la nueva imgen
    const imagen = document.createElement("img");
    imagen.src = "./images/Arbol.png";
    imagen.width = "200";
    bloqueImagen.appendChild(imagen)
    */

    //Voy a poner un vídeo
    const divVideo = document.createElement("div");
    divVideo.classList.add("posicion");

    const video = document.createElement("video");
    video.setAttribute("id", "idVideo");
    video.setAttribute("autoplay", "");
    video.setAttribute("loop", "");
    video.setAttribute("width", "320");
    video.setAttribute("height", "320");

    const source = document.createElement("source");
    source.src = "./images/AndHappyNewYear.mp4";
    source.setAttribute("type", "video/mp4")

    video.appendChild(source);
    divVideo.appendChild(video);
    //    contenedor.appendChild(divVideo)

    //hago lo mismo para la 2ª imagen que se mostrará

    const bloqueImagen2 = document.createElement("div");
    bloqueImagen2.classList.add("posicion");
    bloqueImagen2.classList.add("top");
    const imagen2 = document.createElement("img");
    imagen2.src = "./images/And_happy_new_Year.png";
    imagen2.width = "300";
    bloqueImagen2.appendChild(imagen2)

    //la 1a imagen se mostrará a los 3s
    setTimeout(() => {
        contenedor.appendChild(divVideo)
    }, 3000)

    //la 2a imagen se mostrará a los 4.5s
    setTimeout(() => {
        contenedor.appendChild(bloqueImagen2)
    }, 5500)





}


