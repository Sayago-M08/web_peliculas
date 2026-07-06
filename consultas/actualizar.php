<?php   
require 'conexion.php';

$id_pelicula = $_GET['id_pelicula'];

$sql = "SELECT
pelicula.*,

GROUP_CONCAT(DISTINCT peliculas_generos.id_genero SEPARATOR ', ') AS genero_id, 
GROUP_CONCAT(DISTINCT peliculas_actores.id_actores SEPARATOR ', ')AS actor_id, 
GROUP_CONCAT(DISTINCT peliculas_directores.id_directores     SEPARATOR ', ')AS director_id
FROM pelicula   


INNER JOIN peliculas_actores ON pelicula.id_pelicula = peliculas_actores.id_pelicula


INNER JOIN peliculas_generos ON pelicula.id_pelicula = peliculas_generos.id_pelicula

INNER JOIN peliculas_directores ON pelicula.id_pelicula = peliculas_directores.id_pelicula

WHERE pelicula.id_pelicula = '$id_pelicula'

GROUP BY pelicula.id_pelicula

";

$pelicula = $conexion->query($sql);


$peli = $pelicula->fetch_assoc();


// Convertimos las listas de IDs en arrays de PHP para poder checkearlos fácil en el HTML
$actores_actuales = explode(',', $peli['actor_id']);
$generos_actuales = explode(',', $peli['genero_id']);
$directores_actuales = explode(',', $peli['director_id']);

// Consultas auxiliares para llenar los selects/checkboxes (las mismas que usás al insertar)
$todos_actores = $conexion->query("SELECT id_actor, nombre_completo FROM actor");
// ... (hacer lo mismo para $todos_generos y $todos_directores)
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
        <form action="guardar_cambios.php" method="POST"  enctype="multipart/form-data">
            <input type="hidden" value="<?= $peli['id_pelicula']?>" name="id_pelicula">
            <label for="">nombre</label>
            <br>
            <input type="text" value="<?= $peli['nombre']?>" name="nombre"> 
            <br>

            <label for="">saga</label>
            <br>

            <input type="text" value="<?= $peli['saga']?>" name="saga"> 
            <br>
            <br>
            <label for="">duracion</label>
            <br>

            <input type="text" value="<?= $peli['duracion']?>" name="duracion"> 
            <br>
            <br>  

            <label for="">descripcion</label>
            <br>
            <input type="text" value="<?= $peli['descripcion']?>" name="descripcion"> 
            <br>
            <br>
            
            <!-- <label for="">trailer</label> <video src="<?= $peli['trailer_url']?>" style="height: 200px; width: 200px;" controls></video>
            <br>
            <input type="file" name="trailer">
            <br>

            <label for="">pelicula</label><video src="<?= $peli['pelicula_url']?>" style="height: 200px; width: 200px;" controls></video>
            <br>
            <input type="file" name="pelicula">
            <br> -->
            <br>
            <label for="">foto</label><img src="<?= $peli['foto_url']?>" style="height: 200px; width: 200px;" controls></img>
            <br>
            <input type="file" name="foto">
            <br>
            <input type="submit" value="guardar cambios">
        </form>
    </center>
</body>
</html>