//Elementos
const imagen = document.querySelector("#imagenPrincipal");
const contenedor = document.querySelector("div")

//eventos
eventListeners();
function eventListeners() {
    //evento que se activa al hacer click sobre la imagen principal
    imagen.addEventListener("click", mostrarMensaje);
    //evento que se activa al entrar en la imagen principal
    imagen.addEventListener("mouseover", mostrarMensaje);
}
/**
 * Función que se mostrará un vídeo y un mensaje a los 3 seg
 */
function mostrarMensaje() {

    //Lo primero antes que nada es eliminar los elementos repetidos del dom.
    /**
     * Cada vez que hagamos click, o pongamos el cursor sobre la imagen principal, se creará un vídeo
     * y una imagen (--ver más a continuación--). Por consiguiente, se duplicarán los elemenos cada vez que entremos.
     * Así que lo primero es limpiar el DOM.
     */
    limpiarHTML();

    //Creo el div que contendrá el vídeo
    const divVideo = document.createElement("div");
    divVideo.classList.add("posicion");

    //Creo el elemento video, el cual contendrá el vídeo a resproducir y le asigno sus correspondientes siguientes atributos
    const video = document.createElement("video");
    video.setAttribute("id", "idVideo");//id del vídeo
    video.setAttribute("autoplay", "");//autoplay para que se reproduzca automáticamente
    video.setAttribute("loop", "");//loop para que seté en bucle
    video.setAttribute("width", "320");//dimensiones (ancho) del vídeo
    video.setAttribute("height", "320");//dimensiones (alto) del vídeo

    //inserto el vídeo
    const source = document.createElement("source");
    source.src = "./images/AndHappyNewYear.mp4";
    source.setAttribute("type", "video/mp4")

    //añado los elementos al DOM.
    video.appendChild(source);
    divVideo.appendChild(video);


    //hago lo mismo para la 2ª imagen que se mostrará a los 6seg
    //div que contendrá la imagen
    const bloqueImagen2 = document.createElement("div");
    bloqueImagen2.classList.add("posicion");
    bloqueImagen2.classList.add("top");

    //imgen
    const imagen2 = document.createElement("img");
    imagen2.src = "./images/And_happy_new_Year.png";
    imagen2.width = "300";
    bloqueImagen2.appendChild(imagen2)

    //el vídeo se mostrará a los 3s
    setTimeout(() => {
        contenedor.appendChild(divVideo)
    }, 3000)

    //la 2a imagen se mostrará a los 6s
    setTimeout(() => {
        contenedor.appendChild(bloqueImagen2)
    }, 6000)

}

//funcíon que limpia todo el HTML
function limpiarHTML() {
    //mientras haya elementos en el DOM, y no sea la imagen principal éste los irá limpiando

    if (contenedor.children[3]) {
        contenedor.children[3].remove();
    }
    if (contenedor.children[2]) {
        contenedor.children[2].remove();
    }




}

