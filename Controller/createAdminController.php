<?php

    include_once "../Model/createAdminModel.php";

    if(isset($_POST["btnAddAdmin"]))
    {
        $id = $_POST["txtid"];
        $nombre = $_POST["txtnombre"];
        $correo = $_POST["txtemail"];
        $clave = $_POST["txtpassconfirm"];

        $insertar = createAdminModel($id, $nombre, $correo, $clave);

        header("Location: dashboard.php");
       
    }    

    

?>