
<?php
require_once("../../includes/base.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../includes/style.css">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="../../controllers/validar.php">
        <h1>Inicia sesion</h1>
        <?php if (isset($_GET["error"])){?> <b class="error">¡Usuario o contraseña incorrecto!</b><br><br>
        <?php };?>
        <label>> Email</label><br>
        <input type="text" name="email" placeholder="Email"><br>
        <label>> Contraseña</label><br>
        <input type="password" name="contra" placeholder="Contraseña"><br>
        <input type="submit" class="boton1" value="Login"><br>
        <b>¿No tienes una cuenta? <a href="ver.php">Registrate</a> gratis</b>
    </form>
</body>
</html>