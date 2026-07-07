<?php
require_once '../consultas/conexion.php';

$sql = "SELECT
pelicula.*,

GROUP_CONCAT(DISTINCT genero.nombre SEPARATOR ', ') AS nombre_genero, 
GROUP_CONCAT(DISTINCT actor.nombre_completo SEPARATOR ', ') AS nombre_actor, 
GROUP_CONCAT(DISTINCT director.nombre_completo SEPARATOR ', ') AS nombre_director
FROM pelicula


INNER JOIN peliculas_actores ON pelicula.id_pelicula = peliculas_actores.id_pelicula
INNER JOIN actor ON peliculas_actores.id_actores  = actor.id_actor


INNER JOIN peliculas_generos ON pelicula.id_pelicula = peliculas_generos.id_pelicula
INNER JOIN genero ON peliculas_generos.id_genero = genero.id_genero

INNER JOIN peliculas_directores ON pelicula.id_pelicula = peliculas_directores.id_pelicula
INNER JOIN director ON peliculas_directores.id_directores = director.id_director

GROUP BY pelicula.id_pelicula

";

$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
       
        table, th, td {
            border: 1px solid #333; 
        }

        table {
            width: 100%;
        }


        th, td {
            padding: 10px;
            text-align: left; 
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Películas disponibles</h2>

    <table>
        <thead>
            <tr>
                <th>id_pelicula</th>
                <th>nombre</th>
                <th>saga</th>
                <th>duracion</th>
                <th>descripcion</th>
                <th>actores</th>
                <th>generos</th>
                <th>directores</th>
                <th>trailer</th>
                <th>pelicula</th>
                <th>foto</th>
                <th>ELIMINAR</th>
                <th>ACTUALIZAR</th>
            </tr>
        </thead>
        <tbody>
            <?php while($pelicula = $resultado->fetch_assoc()){ ?>
            <tr>
                <td><?= $pelicula['id_pelicula']?></td>
                <td><?= $pelicula['nombre']?></td>
                <td><?= $pelicula['saga']?></td>
                <td><?= $pelicula['duracion']?></td>
                <td><?= $pelicula['descripcion']?></td>
                <td><?= $pelicula['nombre_actor']?></td>
                <td><?= $pelicula['nombre_genero']?></td>
                <td><?= $pelicula['nombre_director']?></td>
                <td><video src="<?= $pelicula['trailer_url']?>" style="height: 200px; width: 200px;" controls></video></td>
                <td><video src="<?= $pelicula['pelicula_url']?>" style="height: 200px; width: 200px;" controls></video></td>
                <td><img src="<?= $pelicula['foto_url']?>" style="height: 100px; width: 100px;"></td>
                <td><button><a href="../consultas/eliminar.php?id_pelicula=<?= $pelicula['id_pelicula']?>">ELIMINAR</a></button></td>
                <td><button><a href="../consultas/actualizar.php?id_pelicula=<?= $pelicula['id_pelicula']?>"> ACTUALIZAR</a></button></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</body>
</html>