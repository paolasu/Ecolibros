<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Inicio de sesion </title>
    
</head>
<body>
    <header class="black-header">
        <div class="logo">
            <img src="Imagenes/Logoverde.png" alt="Logo de TuEmpresa">
        </div>
        <div class="header-content">
            <div class="account" >Mi Cuenta</div>
            <div class="subscribe-btn" onclick="redirectToRegister()">Suscríbete</div>
        </div>
    </header>
    <body style="background-image: url('../ecolibros/Imagenes/Login.png');"></body>
    <div class="login-container">
        <form action="php/login_usuario.php" method ="POST">
            <label for="nombre">Correo Electrónico:</label>
            <input type="email" id="email" name="correo" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="contraseña" required>
            <br>
            <button class="login-btn" type="submit">Acceder</button>

        </form>
    </div>
    <footer class="black-footer">
        <div class="logo">
            <img src="Imagenes/Logoverde.png" alt="Logo de Ecolibros">
        </div>
        <p>&copy; 2023 Ecolibros. Todos los derechos reservados.</p>
    </footer>
    <script>
        // Función para redirigir a la página de login
        function redirectToRegister() {
            window.location.href = 'register.php';
        }
        function redirectToIndex() {
            window.location.href = 'index.php';
        }

        // Agregar evento de clic al logotipo
        document.addEventListener('DOMContentLoaded', function () {
            var logo = document.querySelector('.logo');
            logo.addEventListener('click', redirectToIndex);
        });
    </script>
</body>
</html>