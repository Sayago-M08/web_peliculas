<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "la_cueva";

$conexion = new mysqli($host, $user,$password,$db);
if($conexion->connect_error){
    die("Error de conexion" . $conexion->connect_error);
}

?>