<?php
require 'conexion.php';
$id_pelicula = $_POST['id_pelicula'];

$sql_foto="SELECT foto_url FROM pelicula WHERE id_pelicula ='$id_pelicula'";

$conexion->query($sql_foto);

$foto = $conexion->fetch_assoc();
$ruta_final = $foto['foto_url'];



$nombre = $_POST['nombre'];
$saga = $_POST['saga'];
$duracion = $_POST['duracion'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE pelicula SET nombre='$nombre', saga='$saga',duracion='$duracion',descripcion='$descripcion' WHERE id_pelicula='$id_pelicula'";
$conexion->query($sql);

if($conexion){
    echo "se guardaron los cambios";
}
?>