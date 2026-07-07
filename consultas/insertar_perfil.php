<?php
session_start();
require_once 'conexion.php';

$id_cuenta = $_SESSION['user'];
$nombre_perfil = $_POST['nombre'];
$id_contenido = $_POST['id_contenido'];


$foto_destino    = "../consultas/fotos_perfiles/" . time() . "_" . $_FILES['foto']['name'];

$foto_movida    = move_uploaded_file($_FILES['foto']['tmp_name'], $foto_destino);

if ($foto_movida) {


    $sql = "INSERT INTO perfil (nombre, foto_url, id_cuenta, id_contenido) 
    VALUES ('$nombre_perfil', '$foto_destino', '$id_cuenta', '$id_contenido')";
    $conexion->query($sql);
    
    header("location: ../La cueva/perfiles.php");

}
?>