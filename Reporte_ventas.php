<?php
session_start();

include './conn/conexionBD.php';

$bdAbierta = AbrirBD();

 

		$sql = 'BEGIN PK_REPORTES.prd_rpt_ventas(:DATOS); END;';            

								//Statement does not change
								$stmt = oci_parse($bdAbierta,$sql);                     


								//But BEFORE statement, Create your cursor
								$cursor = oci_new_cursor($bdAbierta);

								// On your code add the latest parameter to bind the cursor resource to the Oracle argument
								oci_bind_by_name($stmt,":DATOS", $cursor,-1,OCI_B_CURSOR);

								// Execute the statement as in your first try
								oci_execute($stmt);

								// and now, execute the cursor
								oci_execute($cursor);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title >COFFEE SHOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>

    </style>

</head>

<body>


<div class="jumbotron text-center" style="margin-bottom:0;background-color:#ffecd2;">
        <img src="imagenes/cof.png" alt="" width="250px" height="250px"  class="float-left">
        <p style="color:black; font-family:Brush Script MT; font-size: 65px; text-align:center;"> El café que inspirará tus ideas. </p>
        <p style="color:black; font-family:Brush Script MT; font-size: 65px; text-align:center;">Bienvenido a tu lugar feliz</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php" style="font-family:Sans-serif; font-size:20px;">Sobre
            nosotros</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
             <a class="navbar-brand" href="tipos_cafes.php" style="font-family:Sans-serif; font-size:20px;">Tipos de Cafés</a>
                
                 <a class="navbar-brand" href="acompañaminetos.php" style="font-family:Sans-serif; font-size:20px;">Acompañamientos</a>
                
                <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"
                            style="font-family:Sans-serif; font-size:20px;">
                            Servicios
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                                style="font-family:Sans-serif; font-size:16px;">Lavanderia</a>
                            <a class="dropdown-item" href="#" style="font-family:Sans-serif; font-size:16px;">Alquiler</a>
                            <a class="dropdown-item" href="#" style="font-family:Sans-serif; font-size:16px;">Asesoramiento</a>
                            <a class="dropdown-item" href="comentario.html"
                                style="font-family:Sans-serif; font-size:16px;">Comentarios</a>
                        </div>
                        <!-- <img src="imagenes/iconoInicio.png" alt="" width="35px" height="35px" class="float-right"> -->
                    </div>
                </li>

 


              <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"
                            style="font-family:Sans-serif; font-size:20px;">
                            Entrar
                        </button>
                        <div class="dropdown-menu">
                   

                   <?php
                        if(isset($_SESSION["usuario"])){
                   ?>
                        <a class="dropdown-item" href="logout.php" style="font-family:Sans-serif; font-size:16px;">Salir</a>
                   <?php
                       }else{
                   ?>

                            <a class="dropdown-item" href="login.php" style="font-family:Sans-serif; font-size:16px;">Login</a>
                            <a class="dropdown-item" href="registrar.php" style="font-family:Sans-serif; font-size:16px;">Registro</a>
                   <?php
                       } 
                   ?>  
                        </div>

                   <?php
                        if(isset($_SESSION["usuario"])){
                            if($_SESSION["rol"]==1){
                   ?>
                         <a class="navbar-brand" href="lista_carrito.php" style="font-family:Sans-serif; font-size:20px;">Carrito</a>
                   <?php
                            }
                       } 
                   ?>

                   

                       
                        <!-- <img src="imagenes/iconoInicio.png" alt="" width="35px" height="35px" class="float-right"> -->
                    </div>
                </li>


               <?php
               //rol = 2, es administrador
                    if(isset($_SESSION["usuario"])){
                            if($_SESSION["rol"]==2){
                   ?>

                            <li class="nav-item">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"
                                        style="font-family:Sans-serif; font-size:20px;">
                                        Reportes
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="Reporte_ventas.php" style="font-family:Sans-serif; font-size:16px;">Ventas</a>
                                        <a class="dropdown-item" href="Reporte_cliente_reg.php" style="font-family:Sans-serif; font-size:16px;">Clientes registrados</a>
                                        <a class="dropdown-item" href="Reporte_comentarios.php" style="font-family:Sans-serif; font-size:16px;">Comentarios ingresados</a>
                                        <a class="dropdown-item" href="Reporte_errores.php" style="font-family:Sans-serif; font-size:16px;">Errores</a>
                                    </div>
                                    <!-- <img src="imagenes/iconoInicio.png" alt="" width="35px" height="35px" class="float-right"> -->
                                </div>
                            </li>
                    <?php
                         }  }
                     ?>



            </ul>
        </div>
    </nav>

    <div class="container">
        <?php
        if(isset($_REQUEST['msg'])){
        ?>
            <div class="img-index col-lg img-fluid">
                  <h3><?=$_REQUEST['msg'];?></h3>
            </div>
        <?php
        }
        ?>
      
        <div class="row">
            <div class="col-lg-12">
               <h3>Reporte de ventas </h3>




        <div class="row">
                        <div class="  table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                
                                <th>Factura #</th>
                                <th>Codigo #</th>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Precio Unit</th>
                                <th>Impuestos</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>


                              <?php 

                                $totalGeneral = 0;
                                $totalImp = 0;
                                $totalFinal = 0;
                                $ImpFinal = 0;
								
							
                               while (($fila = oci_fetch_array($cursor, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
                                

                                
                                $factura            = $fila['ID_FACT'];
                                $cantidad_articulos = $fila['CANTIDAD_ARTICULOS'];
                                $id_articulo        = $fila['ID_ARTICULO'];
                                $descripcion        =$fila['DESCRIPCION'];
                            
                                $costo_unit         =$fila['COSTO_UNIT'];
                                $imp      =  str_replace(",",".",$fila['IMP']);
                                $total    =  str_replace(",",".",$fila['TOTAL']);
                                $totalGeneral = $totalGeneral + $total;
                                $totalImp = $totalImp +  $imp;

                                //$ImpFinal =  $ImpFinal + $totalImp;
                                $totalFinal = $totalFinal + $total;
                              ?>





                              <tr>
                                <td><?=$factura;?></td>
                                <td><?=$id_articulo;?></td>
                                <td><?=$descripcion;?></td>
                                <td><?=$cantidad_articulos;?></td>
                                <td>$<?=$costo_unit;?></td>
                                <td>$<?=$imp;?></td>
                                <td>$<?=$total;?></td>

                              </tr>

                              <?php

                                }

                                CerrarBD($bdAbierta);

                              ?>


                               
                            </tbody>
                          </table>
                          <hr>
                             
                           <br>
                          Total:$<?=$totalFinal;?>
                        </div>
                        <!-- /.col -->
                      </div>




            </div>
        </div>
    </div>

  

</body>

</html>