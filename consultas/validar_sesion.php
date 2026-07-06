<?php
session_start();

if(!isset($_SESSION['user'])){
 header("location: ../La cueva/ingresar.php");
}
?>