<?php

    include_once "Conexion.php";

    function createAdminModel($id, $nombre, $correo, $clave)
    {    
        $instancia = AbrirBaseDatos();
        $ingreso = $instancia -> query("CALL RegistrarClienteSP('$id', '$nombre', '$correo', '$clave', '1');"); //SP sirve para registrar clientes y admins
        CerrarBaseDatos($instancia);
        
        return $ingreso;
    }

?>