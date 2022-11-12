<?php

    include_once "Conexion.php";

    function ValidarIngresoModel($correo, $contrasenna)
    {    
        $instancia = AbrirBaseDatos();
        $usuario = $instancia -> query("CALL ValidarIngresoSP('$correo', '$contrasenna');");
        CerrarBaseDatos($instancia);
        
        return $usuario;
    }

?>