<?php
    include_once "Conexion.php";    

    function MostrarProductosModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaProductos = $instancia -> query("CALL ConsultarProductos();");
        CerrarBaseDatos($instancia);
    
        return $listaProductos;
    }
    function MostrarMenuModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaProductos = $instancia -> query("CALL ConsultarTodosProductos();");
        CerrarBaseDatos($instancia);
    
        return $listaProductos;
    }
?>