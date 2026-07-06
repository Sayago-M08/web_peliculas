<?php
require 'conexion.php';

$id_pelicula = $_GET['id_pelicula'];

$sql_foto = "SELECT foto_url FROM pelicula WHERE id_pelicula='$id_pelicula'";
$foto =$conexion->query($sql_foto);

if($foto && $foto->num_rows > 0){
$foto_final = $foto->fetch_assoc();
$ruta_foto = $foto_final['foto_url'];

$ruta_real_archivo = str_replace("../consultas/", "", $ruta_foto);
if(file_exists($ruta_foto)){
    unlink($ruta_foto);
}
}

$sql_trailer = "SELECT trailer_url FROM pelicula WHERE id_pelicula='$id_pelicula'";
$trailer =$conexion->query($sql_trailer);

if($trailer && $trailer->num_rows > 0){
$trailer_final = $trailer->fetch_assoc();
$ruta_trailer = $trailer_final['trailer_url'];

$ruta_real_archivo = str_replace("../consultas/", "", $ruta_trailer);
if(file_exists($ruta_trailer)){
    unlink($ruta_trailer);
}
}

$sql_pelicula = "SELECT pelicula_url FROM pelicula WHERE id_pelicula='$id_pelicula'";
$pelicula =$conexion->query($sql_pelicula);

if($pelicula && $pelicula->num_rows > 0){
$pelicula_final = $pelicula->fetch_assoc();
$ruta_pelicula = $pelicula_final['pelicula_url'];

$ruta_real_archivo = str_replace("../consultas/", "", $ruta_pelicula);
if(file_exists($ruta_pelicula)){
    unlink($ruta_pelicula);
}
}


$sql_ge = "DELETE FROM peliculas_generos WHERE id_pelicula ='$id_pelicula';";
$conexion->query($sql_ge);

$sql_ac = "DELETE FROM peliculas_actores WHERE id_pelicula ='$id_pelicula';";
$conexion->query($sql_ac);

$sql_di = "DELETE FROM peliculas_directores WHERE id_pelicula ='$id_pelicula';";
$conexion->query($sql_di);

$sql = "DELETE FROM pelicula WHERE id_pelicula ='$id_pelicula';";
$conexion->query($sql);

header("location:../vistas/ver_datos.php");

?>