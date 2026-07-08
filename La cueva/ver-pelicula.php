<?php
require_once '../consultas/conexion.php';
require_once '../consultas/validar_sesion.php';

$id_pelicula = $_POST['id_pelicula'];
$contenido = $_POST['id_contenido'];
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

WHERE pelicula.id_pelicula = '$id_pelicula'

GROUP BY pelicula.id_pelicula

";

$resultado = $conexion->query($sql);


$sql_peliculas = "SELECT * FROM pelicula WHERE id_pelicula !='$id_pelicula' AND pelicula.id_contenido ='$contenido'";

$resultado_peliculas = $conexion->query($sql_peliculas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/style-ver-pelicula.css">
</head>
<body>
        <nav class="nav">
            <div class="nav-logo">
                <h2>LA CUEVA</h2>
            </div>
            <div class="nav-link">
                <form action="" class="form-nav">
                    <input type="text" class="buscar" placeholder="Buscar...">
                    <input type="submit" value="buscar" class="btn-buscar">
                </form>
                <ul>
                    <li><a href="./peliculas.html">Inicio</a></li>
                    <li><a href="#">Mi peliculas    </a></li>
                </ul>
            </div>
            <div class="nav-datos">
                
            <h2>Que buena pelicula <?= $_SESSION['name']?></h2>
            </div>
        </nav>
        <header>    
            <div class="peliculas-parecidas">
                <div class="peliculas">
                    <?php while($pelicula = $resultado_peliculas->fetch_assoc()){ ?>
                    <div class="pelicula">  
                        <h1><?= $pelicula['nombre']?></h1>
                        <div class="contenido-datos">
                            <h3 class="duracion"><?= $pelicula['duracion']?>Min</h3>
                            <h3 class="duracion"><?= $pelicula['saga']?></h3>
                        </div>
                        <a href="ver-pelicula.html"><img src="<?= $pelicula['foto_url']?>"></a>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="pelicula-elegida">
                <?php while($pelicula = $resultado->fetch_assoc()){ ?>
                <div class="video-pelicula">
                    <video controls>
                        <source src="<?= $pelicula['pelicula_url']?>">
                    </video>
                    <div class="actores-directores">
                        <div class="datos-pelicula">
                            <div class="titulo">
                                <h2>Actores</h2>
                            </div>
                            <ul>
                                <li><?= $pelicula['nombre_actor']?></li>
                            </ul>
                            <div class="titulo">
                                <h2>Directores </h2>
                            </div>
                            <ul>
                                <li><?= $pelicula['nombre_director']?></li>
                            </ul>
                            <div class="titulo">
                                <h2>Generos </h2>
                            </div>
                            <ul>
                                <li><?= $pelicula['nombre_genero']?></li>
                            </ul>
                        </div>

                        <div class="comentarios">
                            <h2>comentarios</h2>
                                <p>deja tu comentraio o lee el de los demas </p>
                                <div class="botones">
                                    <button><a href="#">Dejar tu comentraio</a></button>
                                    <button><a href="#">Leer comentraios</a></button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="descripcion">
                    <h2>Descricion de la pelicula</h2>
                    <p><?= $pelicula['descripcion']?></p>
                </div>
                <?php }?>
            </div>
        </header>
</body>
</html>