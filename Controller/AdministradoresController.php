<?php

    include_once "../Model/AdministradoresModel.php";

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



    if(isset($_POST['btnActualizarAdmin']))
    {
        $cedula = $_POST["txtid"]; 
        $Nombre = $_POST["txtnombre"];  
        $correo = $_POST["txtemail"]; 
        $Contrasenna = $_POST["txtpassconfirm"]; 
        
        ActualizarAdministradoresModel($cedula, $Nombre, $correo, $Contrasenna);
        header("Location: ../View/MantenimientoAdministradores.php");
    }


    if(isset($_POST['EliminarAjax']))
    {
        $cedula = $_POST['cedula'];
        EliminarAdministradoresModel($cedula);
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

    function ConsultarAdministradores()
    {              
        $listaAdministradores = ConsultarAdministradoresModel();

        while($item = mysqli_fetch_array($listaAdministradores))
        {   
            echo "<tr>";
            echo "<td>" . $item["ID_Usuario"] . "</td>";
            echo "<td>" . $item["Nombre_Usuario"] . "</td>";
            echo "<td>" . $item["correo"] . "</td>";
            echo "<td>" . $item["TipoRol"] . "</td>";
            echo '<td>
                    <a href="ActualizarAdministrador.php?q=' . $item["ID_Usuario"] . '" class="link-warning">Actualizar</a>
                  </td>'; 
            echo '<td>
                    <input type="button" class="btn btn-warning" value="Eliminar" 
                    onclick="EliminarAdministrador(' . $item["ID_Usuario"]. ')">
                 </td>'; 
            echo "</tr>";
        }
    }  

    function ConsultarAdministrador($ID_Usuario)
    {       
        $Administrador = ConsultarAdministradorModel($ID_Usuario);
        $item = mysqli_fetch_array($Administrador);
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