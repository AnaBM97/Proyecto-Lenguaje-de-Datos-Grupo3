<?php

    include_once "Conexion.php";

    function createPedidoModel($pIdPedido, $pFechaCompraS, $pFechaEnvioS, $pTipoPedido, $pMetodoPago, $pNumCedula, $pNombre, $pNombreEmpresa, $pCanton, $pDistrito, $pDireccion, $pPhone, $pDetalle, $pMontoTotal)
    {    
        $instancia = AbrirBaseDatos();
        $ingreso = $instancia -> query("CALL createPedidoSP($pIdPedido, '$pFechaCompraS', '$pFechaEnvioS', '$pTipoPedido', '$pMetodoPago', '$pNumCedula', '$pNombre', '$pNombreEmpresa', $pCanton, $pDistrito ,'$pDireccion' , $pPhone, '$pDetalle', '$pMontoTotal');"); 
        CerrarBaseDatos($instancia);
        
        return $ingreso;
    }

    function ConsultarCantonesM(){
        $instancia = AbrirBaseDatos();
        $ingreso = $instancia -> query("CALL callCantonesSP();"); 
        CerrarBaseDatos($instancia);
        
        return $ingreso;
    }

    function ConsultarDistritosM($id){
        $instancia = AbrirBaseDatos();
        $ingreso = $instancia -> query("CALL callDistritoSP($id);"); 
        CerrarBaseDatos($instancia);
        
        return $ingreso;
    }

?>