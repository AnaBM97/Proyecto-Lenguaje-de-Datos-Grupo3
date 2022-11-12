<?php

    include_once "../Model/RegistrarPedidoModel.php";

    if(isset($_POST["btnConfirmarPedido"]))
    {
        $pIdPedido = rand(1,1000);
        $pFechaCompra = new DateTime();
        $pFechaCompraS = $pFechaCompra->format('Y-m-d H:i:s');
        $pFechaEnvio = new DateTime();
        $pFechaEnvioS = $pFechaEnvio->format('Y-m-d H:i:s');
        $pTipoPedido = "A domicilio";
        $pMetodoPago = $_POST["metodoPago"];
        $pNumCedula = $_POST["txtid"];
        $pNombre = $_POST["txtnombre"];
        $pCorreo = $_POST["txtcorreo"];
        $pCanton = $_POST["txtcanton"];
        $pDistrito =  $_POST["txtdistrito"];
        $pDireccion =  $_POST["txtdireccion"];
        $pPhone =  $_POST["txtphone"];
        $pDetalle = $_POST["txtDetalle"];
        $pMontoTotal = $_POST["txtMonto"];
        
        $insertar = createPedidoModel($pIdPedido, $pFechaCompraS, $pFechaEnvioS, $pTipoPedido, $pMetodoPago, $pNumCedula, $pNombre, $pCorreo, $pCanton, $pDistrito, $pDireccion, $pPhone, $pDetalle, $pMontoTotal);

        header("Location: index.php");
       
    }    

    function ConsultarCantones()
    {       
        $listaCantones = ConsultarCantonesM();
        while($item = mysqli_fetch_array($listaCantones))
        {   
            echo "<option value=". $item["IdCanton"] .">" . $item["NombreCanton"] . "</option>";
        }
    }  

    function ConsultarDistrito($id)
    {       
        $listaDistritos = ConsultarDistritosM($id);
        echo '<select class="custom-select d-block w-100" id="txtdistrito" name="txtdistrito">';
        echo '<option selected="selected">Selecciona el distrito</option>';
        while($item = mysqli_fetch_array($listaDistritos))
        {                                           
            echo "<option value=". $item["IdDistrito"] .">" . $item["NombreDistrito"] . "</option>";
        }
        echo '</select>';
    }  
?>