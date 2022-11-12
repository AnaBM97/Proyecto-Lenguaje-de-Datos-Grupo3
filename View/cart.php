<?php include_once "componentes.php"; ?>
<html lang="en">

<?php CSS(); ?>
<body>
    <div id="wrapper">
        <?php MostrarCartaMenu(); ?>

        <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="#"><img src="../img/menu/waffles-con-miel-de-abeja.jpeg" alt="Product"></a>
                                            <h6>Waffles con miel de Maple</h6>
                                        </td>
                                        <td class="price"><span>₡2950</span></td>
                                        <td class="qty">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="1">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </td>
                                        <td class="total_price"><span>₡2950</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="menu.php">Continuar comprando</a>
                            </div>
                            <div class="update-checkout w-50 text-right">
                                <a href="#">Limpiar orden</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="coupon-code-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Código Cupon de descuento</h5>
                                <p>Digite su código</p>
                            </div>
                            <form action="#">
                                <input type="search" name="search" placeholder="#569ab15">
                                <button type="submit">Aplicar</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shipping-method-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Método de envio</h5>
                                <p>Seleccione el que desees</p>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><br/><span>Envió a domicilio</span><span>₡2000</span></label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3"><br/><span>Recoger personalmente</span><span>Gratis</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Total de la orden</h5>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> <span>₡2950</span></li>
                                <li><span>Envío</span> <span>Gratis</span></li>
                                <li><span><strong>Total</strong></span> <span><strong>₡2950</strong></span></li>
                            </ul>
                            <a href="checkout.php" class="btn karl-checkout-btn">Proceder a la caja</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->
        <?php MostrarFooter(); ?>
    </div>
    <!-- /.wrapper end -->
    <?php JSmenulnormal(); ?>
</body>
</html>