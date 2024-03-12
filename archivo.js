// Variables
let a,b,c;

// Funcion para ocultar y mostrar el menú
function mostrar_menu(){
    // Valores a utilizar
    a = document.getElementById("aside")

    // Clases ha cambiar
    a.classList.toggle("mostrar_aside")
}
document.getElementById("boton_menu").addEventListener("click", mostrar_menu)

// Modo oscuro
function modo(){
    // Valores a utilizar
    a = document.getElementById("body")
    b = document.getElementById("main")

    // Clases ha cambiar
    a.classList.toggle("bg-dark")
    b.classList.toggle("text-light")
}
document.getElementById("boton_modo").addEventListener("click", modo)

// Ejercicio 9
function jubilacion() {
    // Solicitar al usuario la edad y el género
    a = prompt("Ingrese su edad:")
    b = prompt("Ingrese su género ('F' para mujeres y 'M' para hombres):")

    // Convertir la edad a número
    a = parseInt(a);

    // Verificar las condiciones de jubilación
    if (b === 'F' && a >= 60) {
        alert("Se jubila")
    } else if (b === 'M' && a >= 65) {
        alert("Se jubila")
    } else {
        alert("No se jubila")
    }
}
document.getElementById("boton_jubilacion").addEventListener("click", jubilacion)