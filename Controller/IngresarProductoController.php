<?php

    include_once "../Model/IngresarProductoModel.php";

    if(isset($_POST["btnAddProducto"]))
    {
        $pNombre_Platillo = $_POST["txtnombre"];
        $pPrecio_Platillo = $_POST["txtprecio"];
        $pDescripcion_Platillo =  $_POST["txtdescripcion"];
        $pIdCategoria = $_POST["dropdown_categoria"];
        $pimg_platillo = '../img/menu/' . $_POST["txtimg"];

        $insertar = createProductoModel($pNombre_Platillo, $pPrecio_Platillo, $pDescripcion_Platillo, $pIdCategoria, $pimg_platillo);

        header("Location: dashboard.php");
       
    }    
?>