<?php

    include_once "../Model/ProductosModel.php";

    /*Create*/
    try {
    if(isset($_POST['btnAddAdmin']))
    {
        $cedula = $_POST["txtid"]; 
        $Nombre = $_POST["txtnombre"];  
        $correo = $_POST["txtemail"]; 
        $Contrasenna = $_POST["txtpassconfirm"]; 
        
        RegistrarAdministradoresModel($cedula, $Nombre, $correo, $Contrasenna);
        header("Location: ../View/MantenimientoAdministradores.php");
    }
    }catch (Exception $e) {
        //echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        echo '<script type="text/javascript">';
        echo ' alert("El administrador ya existe")';  //not showing an alert box.
        echo '</script>';
    }

/////////////////////////

if(isset($_POST["btnAddProducto"]))
{
    $pNombre_Platillo = $_POST["txtnombre"];
    $pPrecio_Platillo = '₡' . $_POST["txtprecio"];
    $pDescripcion_Platillo =  $_POST["txtdescripcion"];
    $pIdCategoria = $_POST["dropdown_categoria"];
    $pimg_platillo = '../img/menu/' . $_POST["txtimg"];

    RegistrarProductosModel($pNombre_Platillo, $pPrecio_Platillo, $pDescripcion_Platillo, $pIdCategoria, $pimg_platillo);
    header("Location: ../View/MantenimientoProductos.php");
   
} 

    if(isset($_POST['btnActualizarProducto']))
    {
        $id = $_POST["txtid"]; 
        $Nombre = $_POST["txtnombre"];  
        $precio = $_POST["txtprecio"]; 
        $descripcion = $_POST["txtdescripcion"]; 
        $pimg_platillo = '../img/menu/' . $_POST["txtimg"];
        
        ActualizarProductosModel($id, $Nombre, $precio, $descripcion, $pimg_platillo);
        header("Location: ../View/MantenimientoProductos.php");
    }


    if(isset($_POST['EliminarProductoAjax']))
    {
        $id = $_POST['id'];
        EliminarAProductosModel($id);
    }
    /*Create*/
    function ConsultarRoles()
    {       
        $listaRoles = ConsultarRolesModel();
        while($item = mysqli_fetch_array($listaRoles))
        {   
            echo "<option value=". $item["IdRol"] .">" . $item["TipoRol"] . "</option>";
        }
    }  

    function ConsultarProductos()
    {              
        $listaProductos = ConsultarProductosModel();

        while($item = mysqli_fetch_array($listaProductos))
        {   
            echo "<tr>";
           // echo "<td>" . $item["IdPlatillo"] . "</td>";
            echo "<td>" . $item["Nombre_Platillo"] . "</td>";
            echo "<td>" . $item["Precio_Platillo"] . "</td>";
            echo "<td>" . $item["Descripcion_Platillo"] . "</td>";
            echo '<td>
                    <a href="ActualizarProducto.php?q=' . $item["IdPlatillo"] . '" class="link-warning">Actualizar</a>
                  </td>'; 
            echo '<td>
                    <input type="button" class="btn btn-warning" value="Eliminar" 
                    onclick="EliminarProducto(' . $item["IdPlatillo"]. ')">
                 </td>'; 
            echo "</tr>";
        }
    }  

    function ConsultarProducto($IdPlatillo)
    {       
        $Producto = ConsultarProductoModel($IdPlatillo);
        $item = mysqli_fetch_array($Producto);
        return $item;
    }  

    function ConsultarRolesAdministrador($rolActual)
    {       
        $listaRoles = ConsultarRolesModel();
        while($item = mysqli_fetch_array($listaRoles))
        {   
            if($rolActual == $item["IdRol"])
            {
                echo "<option selected value=". $item["IdRol"] .">" . $item["TipoRol"] . "</option>";
            }
            else
            {
                echo "<option value=". $item["IdRol"] .">" . $item["TipoRol"] . "</option>";
            }
            
        }
    }  


?>