$(document).ready(function() {
  cargarComentarios();

  $("#agregar-comentario").click(function() {
    var nombre = $("#nombre").val();
    var comentario = $("#comentario").val();

    $.post("guardar_comentario.php", { nombre: nombre, comentario: comentario }, function(data) {
      if (data === "success") {
        cargarComentarios();
        $("#nombre, #comentario").val("");
      } else {
        alert("Error al agregar comentario. Inténtalo de nuevo.");
      }
    });
  });

  $(document).on("click", ".eliminar-comentario", function() {
    var comentarioId = $(this).data("id");
    $.post("eliminar_comentario.php", { id: comentarioId }, function(data) {
      if (data === "success") {
        cargarComentarios();
      } else {
        alert("Error al eliminar comentario. Inténtalo de nuevo.");
      }
    });
  });

  function cargarComentarios() {
    $.get("obtener_comentarios.php", function(data) {
      $("#comentarios-container").html(data);
    });
  }
});