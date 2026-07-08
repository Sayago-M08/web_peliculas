<?php
require_once '../consultas/conexion.php';
require_once '../consultas/validar_sesion.php';
$nombre = $_SESSION['name'];

$sql = "SELECT * FROM genero ";

$resultado = $conexion->query($sql);

$sql_actores = "SELECT * FROM actor";

$resultado_actor = $conexion->query($sql_actores);

$sql_director = "SELECT * FROM director";

$resultado_director = $conexion->query($sql_director);

$sql = "SELECT * FROM contenido ";

$contenido = $conexion->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar pelicula</title>
    <link rel="stylesheet" href="../La cueva/estilos/agregar.css">
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

    <form class="form-agregar" action="../consultas/insertar_datos.php" method="POST" enctype="multipart/form-data">
        <h2 class="titulo-form">Agrega tu pelicula</h2>

        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre de su pelicula">
        </div>

        <div class="campo">
            <label>Genero</label>
            <div id="contenedor-genero">
                <div class="fila-genero">
                    <select name="id_genero[]">
                        <option value="">Elija una opcion</option>
                        <?php while($genero = $resultado->fetch_assoc()){ ?>
                        <option value="<?= $genero['id_genero']?>"><?= $genero['nombre']?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <button type="button" class="btn-agregar" id="btn-agregar-genero">+ Agregar otro genero</button>
        </div>

        <div class="campo">
            <label>Director</label>
            <div id="contenedor-director">
                <div class="fila-director">
                    <select name="id_director[]">
                        <option value="">Elija una opcion</option>
                        <?php while($director = $resultado_director->fetch_assoc()){ ?>
                        <option value="<?= $director['id_director']?>"><?= $director['nombre_completo']?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <button type="button" class="btn-agregar" id="btn-agregar-director">+ Agregar otro director</button>
        </div>

        <div class="campo">
            <label>Actores</label>
            <div id="contenedor-actores">
                <div class="fila-actor">
                    <select name="id_actor[]">
                        <option value="">Elija una opcion</option>
                        <?php while($actor = $resultado_actor->fetch_assoc()){ ?>
                        <option value="<?= $actor['id_actor']?>"><?= $actor['nombre_completo']?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <button type="button" class="btn-agregar" id="btn-agregar-actor">+ Agregar otro actor</button>
        </div>

        <div class="campo">
            <label>Tipo de contenido</label>
            <select name="id_contenido">
                <?php while($resultado = $contenido->fetch_assoc()){?>
                <option value="<?= $resultado['id_contenido']?>">
                    <?= $resultado['contenido']?>
                </option>
                <?php }?>
            </select>
        </div>

        <div class="campo">
            <label for="duracion">Duracion de la pelicula (en minutos)</label>
            <input type="text" name="duracion" id="duracion" placeholder="Ingrese la duracion de la pelicula">
        </div>

        <div class="campo">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" placeholder="Ingrese una Descripcion">
        </div>

        <div class="campo">
            <label for="saga">Saga</label>
            <input type="text" name="saga" id="saga" placeholder="Ingrese la saga">
        </div>

        <div class="campo">
            <label for="trailer">Trailer de la pelicula</label>
            <input type="file" name="trailer" id="trailer">
        </div>

        <div class="campo">
            <label for="pelicula">Pelicula</label>
            <input type="file" name="pelicula" id="pelicula">
        </div>

        <div class="campo">
            <label for="foto">Foto de la pelicula</label>
            <input type="file" name="foto" id="foto">
        </div>

        <input class="btn-enviar" type="submit" value="Agregar">
    </form>

    <script src="agregar.js"></script>
</body>
</html>