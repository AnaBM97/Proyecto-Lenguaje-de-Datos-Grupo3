<?php 
//partial view para evitar que el html se sobrecargue cuando se hace un cambio en el select de cantones
    include_once '../Controller/RegistrarPedidoController.php'; 
    
    if(isset($_POST['ID_CANTON'])) // <-tiene que estar fuera de un metodo/function
    {
        $getIdCanton = $_POST['ID_CANTON'];
        ConsultarDistrito($getIdCanton);
    }
?>