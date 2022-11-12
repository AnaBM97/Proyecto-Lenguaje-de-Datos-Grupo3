<?php

    include_once "conexion.php";

    function ConsultarAdministradoresModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaAdministradores = $instancia -> query("CALL ConsultarAdministradoresSP();");
        CerrarBaseDatos($instancia);
        return $listaAdministradores;
    }


    function ConsultarAdministradorModel($Cedula)
    {    
        $instancia = AbrirBaseDatos();
        $Administrador = $instancia -> query("CALL ConsultarAdministradorSP('$Cedula');");
        CerrarBaseDatos($instancia);
        return $Administrador;
    }


    function ConsultarRolesModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaRoles = $instancia -> query("CALL ConsultarRolesSP();");
        CerrarBaseDatos($instancia);
        return $listaRoles;
    }


    function RegistrarAdministradoresModel($id, $nombre, $correo, $clave)
    {    
        $instancia = AbrirBaseDatos();
        $instancia -> query("CALL RegistrarClienteSP('$id', '$nombre', '$correo', '$clave', '1');");
        CerrarBaseDatos($instancia);
    }


    function ActualizarAdministradoresModel($cedula, $Nombre, $Correo, $Contrasenna)
    {    
        $instancia = AbrirBaseDatos();
        $instancia -> query("CALL ActualizarAdministradorSP('$cedula', '$Nombre', '$Correo', '$Contrasenna', '1');");
        CerrarBaseDatos($instancia);
    }


    function EliminarAdministradoresModel($cedula)
    {    
        $instancia = AbrirBaseDatos();
        $instancia -> query("CALL EliminarAdministradorSP('$cedula');");
        CerrarBaseDatos($instancia);
    }

    
   

?>