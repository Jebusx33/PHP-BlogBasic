document.addEventListener("DOMContentLoaded", function () {
    const fechaActual = new Date();
    const anioActual = fechaActual.getFullYear();
    document.getElementById("anio-actual").innerHTML = anioActual;
});