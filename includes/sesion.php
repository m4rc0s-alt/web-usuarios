<?php
@session_start();
if (isset($_GET["s"])){
    session_destroy();
    header("Location: ../views/usuarios/inicio.php");
    exit();
}
if (!isset($_SESSION["id"]) || empty($_SESSION["id"])){
    header("Location: inicio.php");
}
?>