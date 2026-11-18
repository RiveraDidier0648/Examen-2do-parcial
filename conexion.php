<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "mi_base_datos";

$conn = new mysqli($usuario, $password, $base_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
