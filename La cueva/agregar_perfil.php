<?php
require_once '../consultas/conexion.php';
require_once '../consultas/validar_sesion.php';
$sql_verificacion = "SELECT * FROM cuenta";
$verificar = $conexion->query($sql_verificacion);

$datos = $verificar->fetch_assoc();
$_SESSION['user'] = $datos['id_cuenta'];

echo "id de la cuenta ".$_SESSION['user'];
$sql = "SELECT * FROM contenido ";

$contenido = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../consultas/insertar_perfil.php" method="POST" enctype="multipart/form-data">
        <label for="">Nombre del perfil</label>
        <br>
        <input type="text" name="nombre">
        <br>
        <label for="">foto de perfil</label>
        <br>
        <input type="file" name="foto">
        <br>
        <label for="">Seleccione el tipo de contenido</label>
        <select name="id_contenido" id="">
            <?php while($resultado = $contenido->fetch_assoc()){?>
            <option value="<?= $resultado['id_contenido']?>">
                <?= $resultado['contenido']?>
            </option>
            <?php }?>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
