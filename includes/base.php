<?php

$servidor = "localhost";
$user = "root";
$password = "";
$database = "base";

$conx = new mysqli($servidor, $user, $password, $database);

if ($conx->connect_errno){
    echo "Error: de conexion con la base";
}


?>