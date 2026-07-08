<?php
require_once '../consultas/conexion.php';
require_once '../consultas/validar_sesion.php';

$sql = "SELECT * FROM contenido ";

$contenido = $conexion->query($sql);

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
    <form action="../consultas/insertar_perfil.php" method="POST" enctype="multipart/form-data">
        <div class="formulario">
            <h2 class="titulo">Ingrese los datos para creear un perfil</h2>
            <div class="contenidos">
                <label for="">Nombre del perfil</label>
                <br>
                <input type="text" name="nombre" placeholder="Ingrese el nombre del perfil">
            </div>
            <div class="contenidos">
                <label for="">foto de perfil</label>
                <br>
                <input type="file" name="foto">
            </div>
            <div class="contenidos">
                <label for="">Seleccione el tipo de contenido</label>
                <br>
                <select name="id_contenido" id="">
                    <?php while($resultado = $contenido->fetch_assoc()){?>
                    <option value="<?= $resultado['id_contenido']?>">
                        <?= $resultado['contenido']?>
                    </option>
                    <?php }?>
                </select>
            </div>  
            <div class="btn-form">
                <input type="submit" value="Enviar">
            </div>
        </div>
    </form>
</body>
</html>
