<?php
session_start();
require_once '../consultas/conexion.php';

$sql = "SELECT * FROM plan";
$plan = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/ingresar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>

    </div>
      <div class="container">
        <div class="container-form">
            <form action="../consultas/inicio_sesion.php" method="POST" class="sign-in">
                <h2>iniciar sesion</h2>
                <div class="social-networks">
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter-x"></i>
                    <i class="bi bi-youtube"></i>
                    <i class="bi bi-whatsapp"></i>
                </div>
                <span>Use su correo y contraseña</span>
                <div class="container-input">
                    <i class="bi bi-envelope"></i>
                    <input type="text" name="correo" placeholder="Email">
                </div>
                <div class="container-input">
                    <i class="bi bi-eye-slash"></i>
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <a href="">¿Olvidaste tu contraseña?</a>
                <button type="submit" class="button">Iniciar sesion</button>
            </form>
        </div>
        <div class="container-form">
            <form action="../consultas/registrar_usuario.php" method="POST" class="sign-up">
                <h2>registrarse</h2>
                <div class="social-networks">
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter-x"></i>
                    <i class="bi bi-youtube"></i>
                    <i class="bi bi-whatsapp"></i>
                </div>
                <span>Use su correo para registrarse</span>
                <div class="container-input">
                    <i class="bi bi-person"></i>
                    <input type="text" placeholder="Nombre de usuario" name="nombre_usuario">
                </div>
                <div class="container-input">
                    <i class="bi bi-envelope"></i>
                    <input type="email" placeholder="Email" name="correo">
                </div>
                <div class="container-input">
                    <i class="bi bi-piggy-bank"></i>
                    <p class="elija">Elijan un plan</p>
                <select name="id_plan" id="">
                    <?php while($resultado = $plan->fetch_assoc()){ ?>
                <option value="<?= $resultado['id_plan']?>"><?= $resultado['nombre']?></option>
                <?php }?>
            </select>
                </div>
                <div class="container-input">
                    <i class="bi bi-eye-slash"></i>
                    <input type="password" placeholder="Contraseña" name="password">
                </div>
                <button type="submit" class="button">registrarse</button>
            </form>
        </div>
        <div class="container-welcome">
            <div class="welcome-sing-up welcome">
                <h3>Bienvenido</h3>
                <p>Ingrese sus datos personals para usar las funcions del sitio</p>
                <button class="button" id="btn-sing-in">Registrars Aqui</button>
            </div>
            <div class="welcome-sing-in welcome">
                <h3>Hola</h3>
                <p>Registrese para obtener la funcionalidad completa del sitio</p>
                <button class="button" id="btn-sing-up">Iniciar sesion Aqui</button>
            </div>
        </div>
    </div>

</body>
</html>

    <script src="./script/script.js"></script>
</body>
</html>