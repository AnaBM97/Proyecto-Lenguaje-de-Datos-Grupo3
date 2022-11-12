$(document).ready(function (){
    $("#txtcanton").change(function () {
        var ID_CANTON = $(this).val();
        $.ajax({
            type: "POST",
            url: "../View/distritosload.php",
            data: {"ID_CANTON": ID_CANTON},
            success: function(data){
                $('#txtdistrito').html(data);
            }
        })
    })
})