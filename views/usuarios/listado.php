<?php
require_once("../../includes/base.php");
require_once("../../includes/sesion.php");
$resultado = $conx->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<style>
    #tabla {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #tabla td, #tabla th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #tabla tr:nth-child(even){background-color: #f2f2f2;}
  
  #tabla tr:hover {background-color: #ddd;}
  
  #tabla th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
</style>
<body>
    <a href="ver.php">Agregar</a>
    <a href="../../includes/sesion.php?s=si">Cerrar sesion</a>
    <table border="3" id="tabla">
        <thead>
            <tr>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Opcion 1</th>
                <th>Opcion 2</th>
            </tr>
        </thead>
        <?php while ($fila = $resultado->fetch_assoc()){ ?>
         <tr>
            <td><?php echo $fila["email"] ?></td>
            <td><?php echo $fila["contra"] ?></td>
            <td><a href="ver.php?op=edit&id=<?php echo $fila["id"] ?>">Editar</a></td>
            <td><a href="../../controllers/usuarios.php?op=delete&id=<?php echo $fila["id"] ?>">Eliminar</a></td>
         </tr>
        <?php } ?>
    </table>
    
</body>
</html>





