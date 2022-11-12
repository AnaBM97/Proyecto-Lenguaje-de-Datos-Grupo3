<?php

    include_once "conexion.php";

    function ConsultarProductosModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaProductos = $instancia -> query("CALL ConsultarProductosMenu();");
        CerrarBaseDatos($instancia);
        return $listaProductos;
    }


    function ConsultarProductoModel($id)
    {    
        $instancia = AbrirBaseDatos();
        $producto = $instancia -> query("CALL ConsultarProductoSP('$id');");
        CerrarBaseDatos($instancia);
        return $producto;
    }


    function ConsultarRolesModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaRoles = $instancia -> query("CALL ConsultarRolesSP();");
        CerrarBaseDatos($instancia);
        return $listaRoles;
    }


    function RegistrarProductosModel($pNombre_Platillo, $pPrecio_Platillo, $pDescripcion_Platillo, $pIdCategoria, $pimg_platillo)
    {    
        $instancia = AbrirBaseDatos();
        $ingreso = $instancia -> query("CALL createProductSP('$pNombre_Platillo', '$pPrecio_Platillo', '$pDescripcion_Platillo', '$pIdCategoria', '$pimg_platillo');"); 
        CerrarBaseDatos($instancia);
        
        return $ingreso;
    }

    function ActualizarProductosModel($id, $Nombre, $precio, $descripcion, $pimg_platillo)
    {    
        $instancia = AbrirBaseDatos();
        $instancia -> query("CALL ActualizarProductoSP('$id', '$Nombre', '$precio', '$descripcion', '$pimg_platillo');");
        CerrarBaseDatos($instancia);
    }


    function EliminarAProductosModel($id)
    {    
        $instancia = AbrirBaseDatos();
        $instancia -> query("CALL EliminarProductoSP('$id');");
        CerrarBaseDatos($instancia);
    }

    
   

?>