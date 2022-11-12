<?php

    include_once "Conexion.php";

    function SignupModel($id, $nombre, $correo, $clave)
    {    
        $instancia = AbrirBaseDatos();
        $ingreso = $instancia -> query("CALL RegistrarClienteSP('$id', '$nombre', '$correo', '$clave', '2');");
        CerrarBaseDatos($instancia);
        
        return $ingreso;
    }

?>