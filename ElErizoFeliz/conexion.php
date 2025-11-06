<?php
$servername = "localhost";
$username = "root";
$password = "JersonHDZc18060510@";
$database = "comentarios";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>