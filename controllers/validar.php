<?php
require_once("../includes/base.php");
@session_start();
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$contra = isset($_POST["contra"]) ? $_POST["contra"] : "";

$stmt = $conx->prepare("SELECT * FROM usuarios WHERE email = ? AND contra = ?");
$stmt->bind_param("ss", $email, $contra);
$stmt->execute();
$resultado = $stmt->get_result();
$stmt->close();

$usuario = $resultado->fetch_object();

if ($usuario === NULL) {
    header("Location: ../views/usuarios/inicio.php?error");
    exit();
}else {
    $_SESSION["id"] = $usuario->id;
    echo($usuario->id);
    header("Location: ../views/usuarios/listado.php");
    exit();
}