<?php
session_start();
    include './conn/conexionBD.php';

    $bdAbierta = AbrirBD();

  
	$sql = 'BEGIN prd_get_perifericos(:DATOS); END;';            

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
    <title>COFFEE SHOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/carrito.js"></script>
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
                
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" style="font-family:Sans-serif; font-size:20px;">
                            Servicios
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="combo_desayuno.php" style="font-family:Sans-serif; font-size:16px;">Combos de Desayuno</a>
                           <a class="dropdown-item" href="comentario.php" style="font-family:Sans-serif; font-size:16px;">Comentarios</a>
                        </div>
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
                       // if(isset($_SESSION["usuario"])){
                        //    if($_SESSION["rol"]==1){
                   ?>
                         <a class="navbar-brand" href="lista_carrito.php" style="font-family:Sans-serif; font-size:20px;">Carrito</a>
                   <?php
                          //  }
                       //} 
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
    <br />
    <div class="container">
    <div id="demo" class="carousel slide"  data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/site.jpg"  alt="Ram RGB" width="1100" height="450"style="border-radius: 10px;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="carousel-caption" style="color: black;">
                        <!-- <h3>Ram RGB</h3>
                        <p>$2,500.00</p> -->
                    </div>
                </div>
                <div class="carousel-item float-center">
                    <img src="imagenes/site2.jpg" style="border-radius: 10px;" alt="Tarjeta Gráfica 3090" width="1100" height="450">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="carousel-caption"style="color: black;">
                        <!-- <h3>Tarjeta Gráfica 3090</h3>
                        <p>$300.00</p> -->
                    </div>
                </div>
                <div class="carousel-item img-fluid">
                    <img src="imagenes/site4.jpg" style="border-radius: 10px;" alt="Tarjeta Madre Asus" width="1100" height="450">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="carousel-caption"style="color: black;">
                        <!-- <h3>Tarjeta Madre Asus</h3>
                        <p>$1,600.00</p> -->
                    </div>
                </div>
                <div class="carousel-item img-fluid">
                    <img src="imagenes/shop3.jpg" style="border-radius: 10px;" alt="Disipador RGB" width="1100" height="450">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="carousel-caption" style="color: black;">
                        <!-- <h3>Disipador RGB</h3>
                        <p>$2,000.00</p> -->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <br />
        <br />
        <div class="row">
      
<?php




while (($fila = oci_fetch_array($cursor, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {


?>

            <div class="col-lg-4" style="border: black; border: ridge;">
                <img class="img-fluid" src="<?=$fila['IMG_RUTA'];?>" alt="Tarjeta Tráfica 3090" width="350" height="300">
                <h5 class="font-weight-bold">Precio ₡<?=$fila['PRECIO_UNIT'];?></h5>
                    <input type="button" id="botonAñadir " value="Añadir al Carrito " class="btn btn-dark ">
                    <input type="button" id="botonAñadir " value="+" class="btn btn-success" onclick="agregarAlcarrito(<?=$fila['ID_ARTICULO'];?>);">
                     
            </div>

<?php


 }

 CerrarBD($bdAbierta);
?>
        </div>
    </div>
</body>

</html>