<?php
require_once 'conexion.php';

$nombre = $_POST['nombre'];
$id_genero = $_POST['id_genero'];
$id_actor = $_POST['id_actor'];
$id_director = $_POST['id_director'];
$duracion = $_POST['duracion'];
$descripcion = $_POST['descripcion'];
$saga = $_POST['saga'];
$id_contenido = $_POST['id_contenido'];

$foto_destino    = "../consultas/fotos/" . time() . "_" . $_FILES['foto']['name'];
$pelicula_destino   = "../consultas/videos/" . time() . "_" . $_FILES['pelicula']['name'];
$trailer_destino = "../consultas/trailer/" . time() . "_" . $_FILES['trailer']['name'];

$foto_movida    = move_uploaded_file($_FILES['foto']['tmp_name'], $foto_destino);
$video_movida   = move_uploaded_file($_FILES['pelicula']['tmp_name'], $pelicula_destino);
$trailer_movido = move_uploaded_file($_FILES['trailer']['tmp_name'], $trailer_destino);


if ($foto_movida && $video_movida && $trailer_movido) {


    $sql = "INSERT INTO pelicula (nombre, saga, duracion, descripcion,id_contenido, trailer_url, pelicula_url, foto_url) 
    VALUES ('$nombre', '$saga', '$duracion', '$descripcion','$id_contenido', '$trailer_destino', '$pelicula_destino', '$foto_destino')";
    $conexion->query($sql);
    
    $id_pelicula_creada = $conexion->insert_id;

    foreach ($id_actor as $id_actor) {
    $sql_actor = "INSERT INTO peliculas_actores (id_pelicula, id_actores)
    VALUES ('$id_pelicula_creada', '$id_actor')
    ";
    $conexion->query($sql_actor);
    }

    foreach ($id_genero as $id_genero){
    $sql_genero = "INSERT INTO peliculas_generos (id_pelicula, id_genero)
    VALUES ('$id_pelicula_creada', '$id_genero')
    ";
    $conexion->query($sql_genero);
    }

    foreach ($id_director as $id_director){
    $sql_director = "INSERT INTO peliculas_directores (id_pelicula, id_directores)
    VALUES ('$id_pelicula_creada', '$id_director')
    ";
    $conexion->query($sql_director);
    }

    echo "¡Película guardada correctamente!";

} else {
    echo "Error al subir los archivos físicos al servidor.";
}

$conexion->close();

