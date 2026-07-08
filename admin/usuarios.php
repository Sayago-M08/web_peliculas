<?php
require_once '../consultas/conexion.php';
require_once '../consultas/validar_sesion.php';
$nombre = $_SESSION['name'];

$sql="SELECT cuenta.*, plan.nombre AS nombre_plan, rol.nombre_rol
FROM cuenta
INNER JOIN plan ON cuenta.id_plan = plan.id_plan 
INNER JOIN rol ON cuenta.id_rol = rol.id_rol
";
$cuenta = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../La cueva/estilos/usuarios.css">
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
                    <li><a href="./vista_admin.php">Inicio</a></li>
                    <li><a href="../consultas/cerrar_sesion.php">Cerrar sesion aqui</a></li>
                </ul>
            </div>
            <div class="nav-datos">
                <h2>
                    Bienvenido <?= $nombre?>
                </h2>    
            </div>
        </nav>
        <!-- <header>
            <h2 class="titulo">Sistema de admin</h2>
        </header> -->
        <main class="usuarios">
            <?php while($resultado = $cuenta->fetch_assoc()){?>
                <div class="col">
                    <i class="bi bi-person"></i> 
                    <h2>id:<?= $resultado['id_cuenta'];?> </h2>
                    <h2>Nombre:<?= $resultado['nombre_usuario'];?></h2>
                    <h2 class="correo">Gmail:<?= $resultado['correo'];?></h2>
                    <h2>Plan:<?= $resultado['nombre_plan'];?></h2>
                    <h2>Rol:<?= $resultado['nombre_rol'];?></h2>
                    <div class="botones">
                        <button class="eliminar">Eliminar</button>
                        <button class="actualizar">Actualizar</button>
                    </div>
                </div>
                <?php }?>
            </main>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="./script/script-pelicula.js"></script>
</body>
</html>