/*document.addEventListener('DOMContentLoaded', function () {
    // Capturar el formulario de login
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();  // Evita la recarga de la página
        
        // Captura los valores del formulario
        let email = document.getElementById('loginEmail').value;
        let password = document.getElementById('loginPassword').value;

        // Enviar datos usando AJAX o Fetch API
        fetch('login.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password)
        })
        .then(response => response.text())
        .then(data => {
            console.log('Respuesta del servidor:', data);
            // Muestra la respuesta en algún lugar de la página si es necesario
        })
        .catch(error => console.error('Error:', error));
    });

    // Capturar el formulario de registro
    document.getElementById('registerForm').addEventListener('submit', function(e) {
        e.preventDefault();  // Evita la recarga de la página
        
        // Captura los valores del formulario
        let nombre = document.getElementById('registerNombre').value;
        let apellido = document.getElementById('registerApellido').value;
        let email = document.getElementById('registerEmail').value;
        let password = document.getElementById('registerPassword').value;

        // Enviar datos usando AJAX o Fetch API
        fetch('registro.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'nombre=' + encodeURIComponent(nombre) + '&apellido=' + encodeURIComponent(apellido) +
                  '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password)
        })
        .then(response => response.text())
        .then(data => {
            console.log('Respuesta del servidor:', data);
            // Muestra la respuesta en algún lugar de la página si es necesario
        })
        .catch(error => console.error('Error:', error));
    });
});

*/


document.getElementById('login').addEventListener('click', function() {
    window.location.href = 'index.php';
});
document.getElementById('registro').addEventListener('click', function() {
    window.location.href = 'index.php';
});


//validacion de los input 

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        const password = document.getElementById('password').value;
        const email = document.getElementById('email').value;
        
        // Validación simple de la contraseña
        if (password.length < 4) {
            alert('La contraseña debe tener al menos 8 caracteres');
            e.preventDefault(); // Evita que se envíe el formulario
        }

        // Validación de email (más allá de la validación de HTML5)
        const emailPattern = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            alert('Por favor, ingresa un correo electrónico válido.');
            e.preventDefault();
        }
    });
});



console.log("hola")
