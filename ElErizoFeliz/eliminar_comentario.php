<?php
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $comentarioId = $_POST["id"];

  $stmt = $conn->prepare("DELETE FROM comentarios WHERE id = ?");
  $stmt->bind_param("i", $comentarioId);

  if ($stmt->execute()) {
    echo "success";
  } else {
    echo "error";
  }

  $stmt->close();
  $conn->close();
}
?>