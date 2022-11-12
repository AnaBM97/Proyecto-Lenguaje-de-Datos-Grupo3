function EliminarAdministrador(cedula)
{
  if (confirm("Está completamente seguro?") == true) {
    $.ajax({
      type: 'POST',
      url: '../Controller/AdministradoresController.php',
      data: {
        "EliminarAjax" : "EliminarAjax",
        "cedula" : cedula
      },
      success: function(resultado)
      {
        location.reload();
      }
    });
  }    
}

function EliminarProducto(id)
{
  if (confirm("Está completamente seguro?") == true) {
    $.ajax({
      type: 'POST',
      url: '../Controller/ProductosController.php',
      data: {
        "EliminarProductoAjax" : "EliminarProductoAjax",
        "id" : id
      },
      success: function(resultado)
      {
        location.reload();
      }
    });
  }    
}
