$('#txtpass, #txtpassconfirm').on('keyup', function () {
    if ($('#txtpass').val() == "" && $('#txtpassconfirm').val() == "") {
      $("#txtvalidacion").val("Se necesita una contraseña");  
      $('#txtvalidacion').html('Se necesita una contraseña').css('color', 'yellow');
      document.getElementById(btnSignup).removeAttribute('disabled');
    } 
});


$('#txtpass, #txtpassconfirm').on('keyup', function () {
    if ($('#txtpass').val() == $('#txtpassconfirm').val() && $('#txtpass').val() !== "" && $('#txtpassconfirm').val() !== "") {
      $("#txtvalidacion").val("Contraseñas iguales");  
      $('#txtvalidacion').html('Contraseñas iguales').css('color', 'green');
      document.getElementById(btnSignup).removeAttribute('disabled');
    } else 
      $("#txtvalidacion").val("¡Contraseñas diferentes!"); 
      $('#txtvalidacion').html('¡Contraseñas diferentes!').css('color', 'red');
});

$('#txtpass, #txtpassconfirm').on('keyup', function () {
    if ($('#txtpass').val() == "" || $('#txtpassconfirm').val() == "") {
      $("#txtvalidacion").val("Confirma tu contraseña");  
      $('#txtvalidacion').html('Confirma tu contraseña').css('color', 'yellow');
      document.getElementById(btnSignup).removeAttribute('disabled');
    } 
});
