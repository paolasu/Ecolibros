<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <title>Ecolibro</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <img class="Logotipo" src="img/Logoverde.png" alt="logo">
            <nav>
                <a href="#" class="activo">Inicio</a>
                <a href="#">Generos</a>
                <a href="#">Más recientes</a>
                <a href="#">Mi lista</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="libro-principal">
            <div class="contenedor">
                <h3 class="titulo">Harry potter</h3>
                <p class="descripcion">
                    La saga Harry Potter, de J.K. Rowling, narra la vida de Harry, un joven mago que enfrenta a Lord
                    Voldemort en un mundo mágico lleno de amistad, valentía y desafíos. Los libros exploran temas de
                    amor, sacrificio y moralidad, convirtiéndose en un fenómeno literario y cultural globalmente
                    adorado.
                </p>
                <button role="button" class="boton"><i class="fa-solid fa-book-open-reader"></i></i>Leer</button>
                <button role="button" class="boton"><i class="fa-brands fa-readme"></i></i>Resumen</button>
            </div>
        </div>
    </main>
    <div class="carousel">
        <div class="carousel__contenedor">
            <button aria-label="Anterior" class="carousel__anterior">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="carousel__lista">
                <div class="carousel__elemento">
                    <img src="img/1.jpeg" alt="100 años de soledad">
                    <p>Así habló zaratustra</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/2.jpeg" alt="100 años de soledad">
                    <p>Donde cantan las ballenas</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/3.jpeg" alt="100 años de soledad">
                    <p>El arte de ser feliz</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/4.jpeg" alt="100 años de soledad">
                    <p>100 años de soledad</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/5.jpeg" alt="100 años de soledad">
                    <p>Mundo como voluntad</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/6.jpeg" alt="100 años de soledad">
                    <p>Harry potter y el caliz de fuego</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/7.jpeg" alt="100 años de soledad">
                    <p>Harry potter y el misterio del principe</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/8.jpeg" alt="100 años de soledad">
                    <p>Harry potter y el prisionero de azkaban</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/9.jpeg" alt="100 años de soledad">
                    <p>Harry potter y la camara secreta</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/10.jpeg" alt="100 años de soledad">
                    <p>Harry potter y la piedra filosofal</p>
                </div>
            </div>


            <button aria-label="Siguiente" class="carousel__siguiente">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div role="tablist" class="carousel__indicadores"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/d50974dedb.js" crossorigin="anonymous"></script>
    <script src="java/man.js"></script>
</body>

</html>