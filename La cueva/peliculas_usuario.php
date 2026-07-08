<?php
require_once '../consultas/conexion.php';
require_once '../consultas/validar_sesion.php';
$contenido = $_POST['id_contenido'];
$perfil =  $_POST['id_perfil'];
$id_cuenta = $_SESSION['user'];

$sql = "SELECT * FROM pelicula WHERE id_contenido = '$contenido'";

$resultado = $conexion->query($sql);

$peliculas = [];
if ($resultado) {
    while ($fila = $resultado->fetch_assoc()) {
        $peliculas[] = $fila;
    }
}

$sql_perfil = "SELECT * FROM perfil
 WHERE id_cuenta ='$id_cuenta' AND id_perfil ='$perfil'";
$perfil= $conexion->query($sql_perfil);
$resultado = $perfil->fetch_assoc()
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
    <main class="principal">
        <nav class="nav">
            <div class="nav-logo">
                <h2>LA CUEVA</h2>
            </div>
            <div class="nav-link">
                <!-- Agregar el buscador -->
                <!-- <form action="" class="form-nav">
                    <input type="text" class="buscar" placeholder="Buscar..." >
                    <input type="submit" value="buscar" class="btn-buscar">
                </form> -->
                <ul>
                    <li><a href="../consultas/cerrar_sesion.php">Cerrar sesion aqui</a></li>
                    <li><a href="./perfiles.php">Cambiar perfil</a></li>
                </ul>
            </div>
            <div class="nav-datos">
                <h2>

                    Bienvenido <?= $resultado['nombre']?>
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
            <h2>Destacadas</h2>
            <div class="swiper-wrapper">
                <?php 
                foreach ($peliculas as $pelicula) { 
                    ?>
                    <div class="swiper-slide">  
                        <h1><?= $pelicula['nombre']?></h1>
                        <div class="contenido">
                            <h3 class="duracion"><?= $pelicula['duracion']?> Min</h3>
                            <h3 class="duracion"><?= $pelicula['saga']?></h3>
                        </div>
                        <form action="./ver-pelicula.php" method="POST">
                        <input type="hidden" name="id_contenido" value="<?= $contenido?>">
                         <input type="hidden" name="id_pelicula" value="<?= $pelicula['id_pelicula']?>">
                        <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                        <img src="<?= $pelicula['foto_url']?>">
                        </button>
                        </form> 
                    </div>
                <?php } ?>
            </div>
        </main>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="./script/script-pelicula.js"></script>
</body>
</html>