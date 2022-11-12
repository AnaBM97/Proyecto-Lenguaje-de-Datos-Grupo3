<?php include_once "componentes.php"; ?>
<?php include_once '../Controller/RegistrarPedidoController.php'; 
?>

<html lang="en">

<?php CSS(); ?>

<body>
    <div id="wrapper">

        <?php 
            //MostrarMenuIndex();            
            session_start();  
            // MostrarMenuIndex();  
                $role = "";
                if(isset($_SESSION["RolUsuario"])){
                    $role = $_SESSION["RolUsuario"];         
                }  
                if($role == "1"){
                    MenuCheckout(); 
                }elseif($role == "2"){
                    MenuCheckout();
                }else{
                    header("Location: login.php");
                }
        ?>
        <div class="col-12" id="reloadJS">

        </div>
        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5>Dirección de envio</h5>
                            </div>

                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="street_address">Número de Cédula<span>*</span></label>
                                        <input type="text" class="form-control mb-3" id="txtid" name="txtid" value="<?php echo $_SESSION["ID_Usuario"];?>" onblur="cedulasAPI();" required readonly>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="txtnombre">Nombre <span>*</span></label>
                                        <input type="text" class="form-control" id="txtnombre" name="txtnombre" value="<?php echo $_SESSION["NombreUsuario"];?>" required readonly>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="txtcorreo">Correo</label>
                                        <input type="text" class="form-control" id="txtcorreo" name="txtcorreo" value="<?php echo $_SESSION["correo"];?>" readonly> 
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="country">Cantón <span>*</span></label>
                                        <p>Ten en cuenta que nuestros envíos trabajan solamente en ciertos distritos de algunos cantones de Cartago, para mayor información llama al 88888888</p>
                                       <!--   -->
                                        <select class="custom-select d-block w-100" id="txtcanton" name="txtcanton"> 
                                            <option value="0">Selecciona el canton</option>
                                            <?php ConsultarCantones(); ?>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="distrito">Distrito<span>*</span></label>
                                        <select class="custom-select d-block w-100" id="txtdistrito" name="txtdistrito">
                                            <option selected="selected">Selecciona el distrito</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="street_address">Dirección <span>*</span></label>
                                        <input type="text" class="form-control mb-3" id="txtdireccion" name="txtdireccion" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Número de teléfono <span>*</span></label>
                                        <input type="text" class="form-control" id="txtphone" name="txtphone" min="0" value="" onkeypress="return valida(event)">
                                    </div>
                                    <div class="col-12">
                                        <label for="metodoPago">Método de pago<span>*</span></label>
                                        <select class="custom-select d-block w-100" id="metodoPago" name="metodoPago">
                                            <option value="SinpeMovil">Sinpe Móvil</option>
                                            <option value="EfectivocontraEntrega">Efectivo contra tarjeta</option>
                                            <option value="TarjetacontraEntrega">Tarjeta de crédito/débito contra entrega</option>
                                            <option value="TransferenciaDirecta">Transferencia Directa</option>
                                        </select>
                                    </div>
                                    <div class="col-12" id="TotalesForm" style="display: none;"> 
                                        <input type="text" class="form-control" id="txtDetalle" name="txtDetalle" min="0" value="">
                                        <input type="text" class="form-control" id="txtMonto" name="txtMonto" min="0" value="" >
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <input type="submit" class="btn karl-checkout-btn" id="btnConfirmarPedido" name="btnConfirmarPedido" value="Confirmar orden">
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">

                            <div class="cart-page-heading">
                                <h5>Tu Orden</h5>
                                <p>Detalles</p>
                            </div>
                            <ul class="order-details-form mb-4" id="ObtenerCarrito">
                                <li><span>Producto</span>  <button type="button" class="btn btn-dark" id="obtenerCheckout">Cargar orden</button> <span>Total</span></li>
                                <div id="ObtenerArrays">

                                </div>                            
                                <div id="ObtenerTotales">

                                </div>
                            </ul>
                            <div id="accordion" role="tablist" class="mb-4">
                            <p>Métodos de pago</p>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>SINPE Móvil</a>                                        </h6>
                                    </div>
                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>Efectivo contra entrega</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-circle-o mr-3"></i>Tarjeta de crédito/débito contra entrega</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><i class="fa fa-circle-o mr-3"></i>Transferencia directa</a>
                                        </h6>
                                    </div>
                                    <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est cum autem eveniet saepe fugit, impedit magni.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->

        <?php MostrarFooter(); ?>
    </div>
    <!-- /.wrapper end -->

    <?php JSmenulnormal(); ?>

</body>

</html>