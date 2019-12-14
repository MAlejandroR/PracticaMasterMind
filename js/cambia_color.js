/*Función para cambiar el color del select
            Según la opción seleccoinada del option
            En este caso el select se llama combinacion0 .. combinacion3
            */
function cambia_color(n) {
    var color = document.getElementById("combinacion" + n).value;
    var elemento = document.getElementById("combinacion" + n);
    elemento.className = color;
}