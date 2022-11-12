function cedulasAPI()
{
  let identificacion = $("#txtid").val();

  if(identificacion.trim() != "")
  {
      $.ajax({
        type: 'GET',
        url: 'https://apis.gometa.org/cedulas/' + identificacion,
        dataType: 'json',
        success: function(resultado)
        {
          $("#txtnombre").val(resultado.nombre);    
        },
        error: function(resultado)
        {
          LimpiarDatos();        
        },
      });
  }
  else
  {
    LimpiarDatos();   
  }
}
