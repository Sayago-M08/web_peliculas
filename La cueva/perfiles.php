<?php
session_start();
require_once '../consultas/conexion.php';

$id_cuenta = $_SESSION['user'];

$sql_conteo = "SELECT COUNT(*) as total_perfiles FROM perfil WHERE id_cuenta = '$id_cuenta'";
    $resultado_conteo = $conexion->query($sql_conteo);

$fila = $resultado_conteo->fetch_assoc();
$cantidad_actual = $fila['total_perfiles'];

$sql = "SELECT perfil.*, contenido.contenido FROM perfil
INNER JOIN contenido ON perfil.id_contenido = contenido.id_contenido
 WHERE id_cuenta ='$id_cuenta'";
$contenido= $conexion->query($sql);


$sql_plan = "SELECT cuenta.*, plan.perfiles FROM cuenta     
INNER JOIN plan ON cuenta.id_plan = plan.id_plan
WHERE id_cuenta ='$id_cuenta'";
 $perfiles = $conexion->query($sql_plan);
 $plan = $perfiles->fetch_assoc();

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
    <?php if ($cantidad_actual >= $plan['perfiles']){?>
    <div class="perfiles">
        <?php while($resultado = $contenido->fetch_assoc()){?>
        <div class="perfil">
            <div class="avatar">
            <form action="./peliculas_usuario.php" method="POST">
            <input type="hidden" name="id_contenido" value="<?= $resultado['id_contenido']?>">
            <input type="hidden" name="id_perfil" value="<?= $resultado['id_perfil']?>">
            <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
            <img src="<?= $resultado['foto_url']?>">
            </button>
            </form> 
            </div>
            <div class="nombre">
                <h2><?= $resultado['nombre'];?></h2>
            </div>
            <div class="contenido">
                <?= $resultado['contenido'];?>
            </div>
        </div>
        <?php }?>
    </div> 
   <?php  } else{ ?>
        <div class="perfiles">
                <?php while($resultado = $contenido->fetch_assoc()){?>
        <div class="perfil">

            <div class="avatar">
            <form action="./peliculas_usuario.php" method="POST">
            <input type="hidden" name="id_contenido" value="<?= $resultado['id_contenido']?>">
            <input type="hidden" name="id_perfil" value="<?= $resultado['id_perfil']?>">
            <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
            <img src="<?= $resultado['foto_url']?>">
            </button>
            </form>
            </a> 
            </div>
            <div class="nombre">
                <h2><?= $resultado['nombre'];?></h2>
            </div>
            <div class="contenido">
                <?= $resultado['contenido'];?>
            </div>
        </div>
        <?php } ?>  
                <div class="perfil">
        
            <div class="agregar">
               <a href="agregar_perfil.php">+</a>
            </div>
            <div class="nombre">
                <h2>agregar perfil</h2>
            </div>
        </div>
    </div>
    <?php } ?>
</body>
</html>