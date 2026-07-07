<?php
require_once '../consultas/conexion.php';

$sql = "SELECT * FROM genero ";

$resultado = $conexion->query($sql);

$sql_actores = "SELECT * FROM actor";

$resultado_actor = $conexion->query($sql_actores);

$sql_director = "SELECT * FROM director";

$resultado_director = $conexion->query($sql_director);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

    <h2>Agrega tu pelicula</h2>
    <form action="../consultas/insertar_datos.php" method="POST" enctype="multipart/form-data">
        <label for="">nombre</label>
        <br>
        <input type="text" name="nombre" placeholder="Ingrese el nombre de su pelicula">
        <br>

<label for="">Genero</label>
<br>
    <div id="contenedor-genero">
        <div class="fila-genero">
            <select name="id_genero[]" id="">
                <option value="">Elija una opcion</option>
                <?php while($genero = $resultado->fetch_assoc()){ ?>
                <option value="<?= $genero['id_genero']?>"><?= $genero['nombre']?></option>
                <?php }?>
            </select>
        </div>
    </div>
<button type="button" id="btn-agregar-genero">+ Agregar otro genero</button>
<br><br>

<label for="">Director</label>
<br>
    <div id="contenedor-director">
        <div class="fila-director">
                <select name="id_director[]" id="">
                <option value="">Elija una opcion</option>
                <?php while($director = $resultado_director->fetch_assoc()){ ?>
                <option value="<?= $director['id_director']?>"><?= $director['nombre_completo']?></option>
                <?php }?>
            </select>
        </div>

    </div>
<button type="button" id="btn-agregar-director">+ Agregar otro director</button>
<br><br>

<label>Actores:</label>
<br>
    <div id="contenedor-actores">
        <div class="fila-actor" style="margin-bottom: 10px;">
            <select name="id_actor[]">
                <option value="">Elija una opcion</option>
                <?php 
                while($actor = $resultado_actor->fetch_assoc()){ 
                ?>
                    <option value="<?= $actor['id_actor']?>"><?= $actor['nombre_completo']?></option>
                <?php }?>
            </select>
        </div>
    </div>

<button type="button" id="btn-agregar-actor">+ Agregar otro actor</button>
<br><br>


        <label for="">Duracion de la pelicula (en minutos)</label>
        <br>

        <input type="text" name="duracion" placeholder="Ingrese la duracion de la pelicula">
        <br>

        <label for="">Descripcion</label>
        <br>
        <input type="text" name="descripcion" placeholder="Ingrese una Descripcion">
        <br>


        <label for="">saga</label>
        <br>
        <input type="text" name="saga" placeholder="Ingrese la saga">
        <br>

        <label for="">Ingrese el trailer de la pelicula</label>
        <br>
        <input type="file" name="trailer" id="">
        <br>

        <label for="">ingrese la pelicula</label>
        <br>
        <input type="file" name="pelicula">
        <br>

        <label for="">ingrese la foto de la pelicula</label>
        <br>
        <input type="file" name="foto">
        <br>
        <input type="submit" value="Agregar">
    </form>
        </center>
    <script src="agregar.js"></script>
</body>
</html>