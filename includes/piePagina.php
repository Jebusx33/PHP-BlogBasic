<div class="clearfix"></div>

<footer id ="pie">
    <div class="last-text">
        <p>Desarrollado por Jesús Arias &copy <span id="anio-actual"> </span> 
            <a href="https://www.jesusarias.com.ar"> www.jesusarias.com.ar</a>
        </p>
    </div>
</footer>
<script>
    function typed() {
        var typed = new Typed(".text", {
            strings: ["Programador", "Desarrollador web", "Analista de Sistemas."],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            logo: true
        })
    }

    setTimeout(function () {
        typed();
    }, 1600);

    const fechaActual = new Date();
    const anioActual = fechaActual.getFullYear();
    document.getElementById("anio-actual").innerHTML = anioActual;
</script>
</body>
</html>