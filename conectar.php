<?php

$host = 'localhost';
$name = 'u917903720_crea';
$pass = 'JawMet01';
$database = 'u917903720_crea';

error_reporting(1);

$conexion = new mysqli($host, $name, $pass, $database);

if ($conexion->errno) {
    echo 'No se puede conectar a la base';
    exit();
}
?>