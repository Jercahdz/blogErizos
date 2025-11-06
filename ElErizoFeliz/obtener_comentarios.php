<?php
require_once("conexion.php");

$result = $conn->query("SELECT * FROM comentarios ORDER BY fecha DESC");

while ($row = $result->fetch_assoc()) {
  echo "<div class='card mt-2'>";
  echo "<div class='card-body'>";
  echo "<h5 class='card-title'>" . $row["nombre"] . "</h5>";
  echo "<p class='card-text'>" . $row["comentario"] . "</p>";
  echo "<button class='btn btn-danger eliminar-comentario' data-id='" . $row["id"] . "'>Eliminar</button>";
  echo "</div>";
  echo "</div>";
}

$conn->close();
?>