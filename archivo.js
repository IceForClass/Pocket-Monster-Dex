window.onload = modo;

// Variables disponibles
let a,b,c;

function modo(){
    // Valores a utilizar
    a = document.getElementById("body")

    // Clases ha cambiar
    a.classList.toggle("bg-dark")
    a.classList.toggle("text-light")
}
document.getElementById("boton_modo").addEventListener("click", modo)