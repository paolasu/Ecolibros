<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-wvfXpqpZZVQlZlUs9KF+lBU/RSUdBdrJSTzfeGnniF5LkFDE4tpA6E9pXPO5luI5" crossorigin="anonymous">

    <title>Ecolibros</title>
</head>

<body>
    <div class="page-container" style="background-image: url('../ecolibros/Imagenes/fondo.png');">
        <header class="black-header">
            <div class="logo">
                <img src="Imagenes/Logoverde.png" alt="Logo de TuEmpresa">
            </div>
            <div class="header-content">
                <div class="account" onclick="redirectToLogin()">Mi Cuenta</div>
                <div class="subscribe-btn" onclick="redirectToRegister()">Suscríbete</div>
                <div class="whatsapp-btn" onclick="redirectToWhatsApp()">
                    <i class="fab fa-whatsapp"></i>
                    <a href="https://wa.me/1234566982" target="_blank">WhatsApp</a>
                </div>
            </div>
        </header>

        <div class="main-content black-overlay">
            <h1>Tu Pasaporte a la Literatura</h1>
            <br>
            <h2>Todos los géneros en un solo lugar</h2>
            <br>
            <h3>¿Listo para adentrarte en un mundo de libros?</h3>
            <h3>Ingresa tu email para unirte a Ecolibros </h3>
            <br>
            <button class="subscribe-btn1" onclick="redirectToRegister()">Suscríbete</button>
        </div>

        <footer class="black-footer">
            <div class="logo">
                <img src="Imagenes/Logoverde.png" alt="Logo de Ecolibros">
            </div>
            <p>&copy; 2023 Ecolibros. Todos los derechos reservados.</p>
        </footer>

        <script>
            // Función para redirigir a la página de registro
            function redirectToRegister() {
                window.location.href = 'register.php';
            }
            
            // Función para redirigir a la página de perfil
            function redirectToLogin() {
                window.location.href = 'login.php';
            }
            function redirectToWhatsApp() {
                window.location.href = 'https://wa.me/123456789?text=Hola%20Ecolibros';
            }
        </script>
    </div>
</body>
</html>
