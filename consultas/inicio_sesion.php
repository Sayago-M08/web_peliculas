
<?php
require_once 'conexion.php';

$correo = $_POST['correo'];
$password = $_POST['password'];


$sql_verificacion = "SELECT * FROM cuenta";
$verificar = $conexion->query($sql_verificacion);

$datos = $verificar->fetch_assoc();


if($verificar && $verificar->num_rows >0){
    if($correo == $datos['correo'] && $password == $datos["contraseña"]){
        session_start();
        $_SESSION['user'] = $datos['id_cuenta'];
        $_SESSION['name'] = $datos['nombre_usuario']
    ?>
    <script>
    window.location.href = "../La cueva/peliculas_usuario.php";
    </script>

        <?php
        }
        else{
        ?>

    <script>alert('Error en la contraseña o Email ');

    window.location.href = "../La cueva/ingresar.php";
    </script>
        <?php 
        }
}else{
?>
        <script>alert('Usuario no existente');
        window.location.href = "../La cueva/ingresar.php";  
        </script>
        <?php
    exit();
    ?>
    <?php
    }
    ?>

