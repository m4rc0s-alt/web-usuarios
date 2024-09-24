<?php
require_once("../../includes/base.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sentencia = $conx->prepare("SELECT * FROM usuarios WHERE id = ? ");
    $sentencia->bind_param("i", $id);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $nombre = $resultado->fetch_object();    
} else {
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../includes/style.css">
</head>
<body>
    <form action="../../controllers/usuarios.php?op=<?php echo(isset($_GET["id"])) ? "edit" : "new"?>" method="post">
    <?php if (isset($_GET["id"])) {?><h1>Editar usuario</h1>
    <?php } else { ?>
        <h1>Agregar Usuario</h1><?php }?>
        <input type="hidden" name="id" value="<?php echo(isset($_GET["id"])) ? $nombre->id : ""; ?>">
        <label>Email:</label><br>
        <input type="text" name="email" placeholder="Email" value="<?php echo(isset($_GET["id"])) ? $nombre->email : ""; ?>"><br>
        <label>Contraseña:</label><br>
        <input type="text" name="contra" placeholder="Contraseña" value="<?php echo(isset($_GET["id"])) ? $nombre->contra : ""; ?>"><br>
        <button class="boton1">Guardar</button><br>
        <b>¿Quieres volver al <a href="listado.php">Listado</a>?</b>
    </form>
</body>
</html>