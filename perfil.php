<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perfil.css">
    <title>Perfil de Usuario</title>
</head>
<body>
    <header class="black-header">
        <div class="logo">
            <img src="Imagenes/Logoverde.png" alt="Logo de TuEmpresa">
        </div>
       
    </header> 

<div class="container">
    <h1 class="profile-title">Mi Perfil</h1>

    <div class="avatar-options">
        <label>Selecciona tu avatar:</label>
        <div class="avatar-preview" onclick="selectAvatar('Imagenes/pombo (2).png')" title="Rafael Pombo">
            <img src="Imagenes/pombo (2).png" alt="Avatar 1">
        </div>
        <div class="avatar-preview" onclick="selectAvatar('Imagenes/Diana Ospina.png')" title=" Diana Ospina">
            <img src="Imagenes/Diana Ospina.png" alt="Avatar 2">
        </div>
        <div class="avatar-preview" onclick="selectAvatar('Imagenes/ecolibrosavatar.png')" title="Gabriel Garcia">
            <img src="Imagenes/ecolibrosavatar.png" alt="Avatar 3">
        </div>
        <div class="avatar-preview" onclick="selectAvatar('Imagenes/piedad bonnet.png')" title="Piedad Bonnet">
            <img src="Imagenes/piedad bonnet.png" alt="Avatar 4">
        </div>
    </div>
    

    <div class="profile-section">
        <img id="avatar" src="default_avatar.png" alt="Avatar seleccionado">
    </div>

    <div class="info-section">
        <label for="phone">Teléfono:</label>
        <input type="text" id="phone">

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email">

        <label for="payment">Método de Pago:</label>
        <select id="payment">
            <option value="paypal">PayPal</option>
            <option value="credit-card">Tarjeta de Crédito</option>
            <option value="pse">PSE</option>
        </select>

        <p>Suscripción Mensual: <span id="subscription-status">Activa</span></p>
    </div>

    <button onclick="updateProfile()">Actualizar Perfil</button>
</div>
<footer class="black-footer">
    <div class="logo">
        <img src="Imagenes/Logoverde.png" alt="Logo de Ecolibros">
    </div>
    <p>&copy; 2023 Ecolibros. Todos los derechos reservados.</p>
</footer>
<script>
    function selectAvatar(avatarSrc) {
        var avatarElement = document.getElementById('avatar');
        avatarElement.src = avatarSrc;

        // Almacena la ruta del avatar seleccionado en Local Storage
        localStorage.setItem('selectedAvatar', avatarSrc);

        console.log('Avatar seleccionado:', avatarSrc);
    }

    function updateProfile() {
        // Resto de la lógica de actualización del perfil...

        // Redirecciona a la página de carrusel después de actualizar el perfil
        window.location.href = 'carrucel.html';
    }
</script>

</body>
</html>


