<?php
require_once("conexion.php"); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = $_POST["nombre"];
  $comentario = $_POST["comentario"];

  $stmt = $conn->prepare("INSERT INTO comentarios (nombre, comentario) VALUES (?, ?)");
  $stmt->bind_param("ss", $nombre, $comentario);

  if ($stmt->execute()) {
    echo "success";
  } else {
    echo "error";
  }

  $stmt->close();
  $conn->close();
}
?>