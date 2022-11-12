<?php

    function Notificar($destinatario, $asunto, $cuerpo)
    {
        require '../PHPMailer/src/PHPMailer.php';
        require '../PHPMailer/src/SMTP.php';

        $mail = new PHPMailer();
        $mail -> CharSet = 'UTF-8';

        $mail -> IsSMTP();
        $mail -> Host = 'smtp.office365.com'; // smtp.gmail.com     
        $mail -> SMTPSecure = 'tls';
        $mail -> Port = 587; // 465 // 25                               
        $mail -> SMTPAuth = true;
        $mail -> Username = 'j-mendez18@outlook.com';                                               
        $mail -> Password = '---';                                
        $mail -> SetFrom('j-mendez18@outlook.com', "Nuevo Inicio de Sesion");
        $mail -> Subject = $asunto;
        $mail -> MsgHTML($cuerpo);
        $mail -> AddAddress($destinatario, 'USER');
        $mail -> send();
    }

    function ValidarSesion()
    {       
        if($_SESSION["RolUsuario"] == null)
        {
            session_destroy();
            header("Location: ../index.php");
        }
    }
    function ValidarSesionClitoAdmin()
    {       
        if($_SESSION["RolUsuario"] == "2")
        {
            header("Location: ../index.php");
        }
    }

?>