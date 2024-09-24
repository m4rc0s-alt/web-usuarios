<?php

include("../includes/base.php");
$op = isset($_GET["op"]) ? $_GET["op"] : "";

if ($op == "edit"){
    $id = $_POST["id"];
    $email = $_POST["email"];
    $password = $_POST["contra"];
    $sentencia = $conx->prepare("UPDATE usuarios SET email = ?, contra = ? WHERE id = ?");
    $sentencia->bind_param("ssi", $email, $password, $id);
    $sentencia->execute();
    header("Location: ../views/usuarios/listado.php");
    exit();
};
if ($op == "delete") {
    $id = $_GET["id"];
    $sentencia = $conx->prepare("DELETE FROM usuarios WHERE id = ?");
    $sentencia->bind_param("i", $id);
    $sentencia->execute();
    header("Location: ../views/usuarios/listado.php");
    exit();
};

if ($op == "new") {
    $id = $_POST["id"];
    $email = $_POST["email"];
    $contra = $_POST["contra"];
    $sentencia = $conx->prepare("INSERT INTO usuarios (email, contra) VALUE (?, ?)");
    $sentencia->bind_param("ss", $email, $contra);
    $sentencia->execute();
    header("Location: ../views/usuarios/listado.php");
    exit();
};
header("Location: ../views/usuarios/listado.php");
exit(); 
?>