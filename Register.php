<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <title>Página de Registro</title>
    
</head>
<body>
    <header class="black-header">
        <div class="logo">
            <img src="Imagenes/Logoverde.png" alt="Logo de TuEmpresa">
        </div>
        <div class="header-content">
            <div class="account" onclick="redirectToLogin()">Mi Cuenta</div>
            <button class="subscribe-btn">Suscríbete</button>
        </div>
    </header>
    <body style="background-image: url('../ecolibros/Imagenes/registro.png');"></body>
    <div class="login-container">
    <form action="php/registro_usuario.php" method ="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" placeholder= "Nombre de Usuario"name="nombre" required><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" placeholder= "Apellido de Usuario" name="apellido" required><br>

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>

    <label for="correo" class="label-horizontal">Correo     :</label>
    <input type="email" id="correo" placeholder= "juanito@gmail.com" name="correo" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" placeholder= "telefono" name="telefono" required><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" placeholder= "dirrecion "name="direccion" required><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena"  placeholder= "Contrasena "name="contrasena" required><br>

    <label>Método de Pago:</label><br>
    <input type="radio" id="paypal" name="metodo_pago" value="paypal" required>
    <label for="paypal">PayPal</label><br>

    <input type="radio" id="tarjeta_credito" name="metodo_pago" value="tarjeta_credito" required>
    <label for="tarjeta_credito">Tarjeta de Crédito</label><br>

    <input type="radio" id="pse" name="metodo_pago" value="pse" required>
    <label for="pse">PSE</label><br>

    <button type="submit" name=registro>Registrarse</button>
</form>
</div>
<footer class="black-footer">
    <div class="logo">
        <img src="Imagenes/Logoverde.png" alt="Logo de Ecolibros">
    </div>
    <p>&copy; 2023 Ecolibros. Todos los derechos reservados.</p>
</footer>
<script>
    function redirectToLogin() {
        window.location.href = 'login.php';
    }
    function redirectToIndex() {
        window.location.href = 'index.php';
    }

    document.addEventListener('DOMContentLoaded', function () {
        var logo = document.querySelector('.logo');
        logo.addEventListener('click', redirectToIndex);
    });
</script>
</body>
</html>
