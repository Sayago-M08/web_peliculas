<?php
require_once '../consultas/conexion.php';
require_once '../consultas/validar_sesion.php';
$sql = "SELECT * FROM pelicula";

$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/style-pelicula.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>
</head>
<body>
    <button><a href="../consultas/cerrar_sesion.php">Cerrar sesion aqui</a></button>
    <main class="principal">
        <nav class="nav">
            <div class="nav-logo">
                <h2>LA CUEVA</h2>
            </div>
            <div class="nav-link">
                <form action="" class="form-nav">
                    <input type="text" class="buscar" placeholder="Buscar...">
                    <input type="submit" value="buscar" class="btn-buscar">
                </form>
                <ul>
                    <li><a href="./peliculas.html">Inicio</a></li>
                    <li><a href="#">Mi peliculas    </a></li>
                </ul>
            </div>
            <div class="nav-datos">
                <h2>

                    Bienvenido <?= $_SESSION['name']?>
                </h2>    
            </div>
        </nav>
        <header  class="foto-principal">
            <div class="item">
                <p class="titulo-pelicula">Bienvenido a LA CUEVA</p>
                <p class="texto-pelicula">Olvídate del mundo exterior y adéntrate en el refugio definitivo para los verdaderos amantes del séptimo arte.</p>
                <video  autoplay loop class="pelicula-fondo">
                    <source src="./contenido/videoplayback (1).mp4">
                    no aguanta
                </video> 
        </header>
        <main class="swiper mySwiper">
            <ul>
                <li>Accion</li>
                <li>Comedia</li>
                <li>Terror</li>
                <li>Suspenso</li>
                <li>Romantica</li>
                <li>Dramatica</li>
            </ul>
            <h2>Reconmendadas</h2>
            <div class="swiper-wrapper">
                <?php while($pelicula = $resultado->fetch_assoc()){ ?>
                <div class="swiper-slide">  
                    <h1><?= $pelicula['nombre']?></h1>
                    <div class="contenido">
                        <h3 class="duracion"><?= $pelicula['duracion']?>Min</h3>
                        <h3 class="duracion"><?= $pelicula['saga']?></h3>
                    </div>

                    <a href="./ver-pelicula.php?id_pelicula=<?= $pelicula['id_pelicula']?>"><img src="<?= $pelicula['foto_url']?>"></a>
                </div>
                <?php }?>
            </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="./script/script-pelicula.js"></script>
</body>
</html>