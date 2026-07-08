<?php
require_once '../consultas/conexion.php';
require_once '../consultas/validar_sesion.php';
$nombre = $_SESSION['name'];


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../La cueva/estilos/vista_admin.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
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
                </ul>
            </div>
            <div class="nav-datos">
                <h2>
                    Bienvenido <?= $nombre?>
                </h2>    
            </div>
        </nav>
        <header>
            <h2 class="titulo">Sistema de admin</h2>
        </header>
        <main class="panel-admin">
            <a href="./agregar.php">
                <div class="col">
                    <i class="bi bi-ticket-perforated"></i>     
                    <h2 class="datos">Agregar peliculas</h2>
                </div>
                </a>
                <!-- Proximamente -->
            <!-- <a href="./agregar.php">
            <div class="col">
                <i class="bi bi-person"></i>
                <h2 class="datos"><a href=""> Ver usuarios</a></h2>
            </div>
            </a> -->
            <!-- <a href="./agregar.php">
            <div class="col">
                <i class="bi bi-incognito"></i>
                <h2 class="datos"><a href=""> Agregar admin</a></h2>
            </div>
            </a> -->
        </main>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="./script/script-pelicula.js"></script>
</body>
</html>