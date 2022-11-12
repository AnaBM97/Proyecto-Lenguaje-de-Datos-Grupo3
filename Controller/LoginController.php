<?php

    include_once '../Model/LoginModel.php';
    include_once 'ComponentesController.php';

    if(isset($_POST["btnLogin"]))
    {
        $correo = $_POST["txtcorreo"];
        $contrasenna = $_POST["txtpass"];
        
        $resultado = ValidarIngresoModel($correo, $contrasenna);
    
        if($resultado -> num_rows > 0)
        {
            session_start();
            $item = mysqli_fetch_array($resultado);
            $_SESSION["NombreUsuario"] = $item["Nombre_Usuario"];
            $_SESSION["RolUsuario"] = $item["idRol"];
            $_SESSION["correo"] = $item["correo"];
            $_SESSION["ID_Usuario"] = $item["ID_Usuario"];


            if($_SESSION["RolUsuario"] == "1"){
                header("Location: dashboard.php");
            }else{
                header("Location: index.php");
            }
            
            $body = 'Estimado(a) ' . $item["Nombre"] . ' se le informa que se ha registrado un inicio de sesión en nuestro sistema...'; 
            Notificar($item["Correo"], 'Inicio de sesión', $body);
            
        }else{
            echo '<script type="text/javascript">';
            echo ' alert("Credenciales incorrectos")';  //not showing an alert box.
            echo '</script>';
        }
        
    }    
    if(isset($_POST["btnCerrarSesion"]))
    {
        session_start();

        session_destroy();
        header("Location: ../index.php");
    }

?>