
<?php
require_once 'conexion.php';

$nombre_usuario = $_POST['nombre_usuario'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$plan = $_POST['id_plan'];
$rol_usuario = 2;

$sql_verificacion = "SELECT id_cuenta FROM cuenta WHERE correo='$correo'";
$verificar = $conexion->query($sql_verificacion);

if($verificar && $verificar->num_rows >0){?>

     <script>alert('Correo ya existente');

        window.location.href = "../La cueva/ingresar.php";
     </script>
        <?php
}else{

    $sql ="INSERT INTO cuenta (nombre_usuario,correo,contraseña,id_rol,id_plan) VALUES ('$nombre_usuario','$correo','$password','$rol_usuario','$plan')";
    
    if($conexion->query($sql)){?>
        <script>alert('¡Usuario creado con éxito! Ya podés iniciar sesión.');</script>
        <?php
    header("location:../La cueva/ingresar.php");
    exit();
    ?>
    <?php
    }
}
    ?>

