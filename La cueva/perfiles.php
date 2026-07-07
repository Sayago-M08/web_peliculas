<?php
session_start();
require_once '../consultas/conexion.php';

$id_cuenta = $_SESSION['user'];

$sql = "SELECT perfil.*, contenido.contenido FROM perfil
INNER JOIN contenido ON perfil.id_contenido = contenido.id_contenido
 WHERE id_cuenta ='$id_cuenta'";
$contenido= $conexion->query($sql);

$resultado= $contenido->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/perfil.css">
</head>
<body>
    <div class="perfiles">
        <div class="perfil">

            <div class="avatar">
                <img src="<?= $resultado['foto_url']?>">
            </div>
            <div class="nombre">
                <h2><?= $resultado['nombre'];?></h2>
            </div>
            <div class="contenido">
                <?= $resultado['contenido'];?>
            </div>
        </div>
        <div class="perfil">

            <div class="agregar">
               <a href="agregar_perfil.php">+</a>
            </div>
            <div class="nombre">
                <h2>agregar perfil</h2>
            </div>
        </div>  
    </div>
</body>
</html>