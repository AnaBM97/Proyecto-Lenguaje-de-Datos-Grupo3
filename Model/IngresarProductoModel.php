<?php

    include_once "Conexion.php";

    function createProductoModel($pNombre_Platillo, $pPrecio_Platillo, $pDescripcion_Platillo, $pIdCategoria, $pimg_platillo)
    {    
        $instancia = AbrirBaseDatos();
        $ingreso = $instancia -> query("CALL createProductSP('$pNombre_Platillo', '$pPrecio_Platillo', '$pDescripcion_Platillo', '$pIdCategoria', '$pimg_platillo');"); 
        CerrarBaseDatos($instancia);
        
        return $ingreso;
    }

?>