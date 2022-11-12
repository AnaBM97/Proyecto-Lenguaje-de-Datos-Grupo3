<?php

    include_once '../Model/SignupModel.php';

    if(isset($_POST["btnSignup"]))
    {
        $id = $_POST["txtid"];
        $nombre = $_POST["txtnombre"];
        $correo = $_POST["txtemail"];
        $clave = $_POST["txtpassconfirm"];


        $insertar = SignupModel($id, $nombre, $correo, $clave);

        header("Location:login.php");
       
    }

?>