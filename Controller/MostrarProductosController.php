<?php
    include_once '../Model/MostrarProductosModel.php';
    function ConsultarProductosIndex()
    {       
        $listaProductos = MostrarProductosModel();
        while($item = mysqli_fetch_array($listaProductos))
        {   
            echo 
            '            
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img src="'. $item["img_platillo"] .'" alt="">
                        <div class="product-quicview">
                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                        <h4 class="product-price">'. $item["Precio_Platillo"] .'</h4>
                        <p>'. $item["Nombre_Platillo"] .'</p>
                        <!-- Add to Cart -->
                        <!--<a href="#" class="add-to-cart-btn">Agregar a la orden</a>-->
                        <button class="btn btn-danger my-cart-btn" data-id="'. $item["IdPlatillo"] .'" data-name="'. $item["Nombre_Platillo"] .'" data-summary="summary 1" data-price="'. $item["Precio_Platillo"] .'" data-quantity="1" data-image="'. $item["img_platillo"] .'">Agregar a la orden</button>
                        <!--<button class="btn btn-danger my-cart-btn" data-id="1" data-name="Elote Dulce1" data-summary="summary 1" data-price="1600" data-quantity="1" data-image="../img/bg1.jpg">Agregar</button>-->
                    </div>
                </div>
            ';
        }
    }
    function ConsultarTodosProductos(){
        $listaProductos = MostrarMenuModel();
        while($item = mysqli_fetch_array($listaProductos))
        {   
            echo 
            '            
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img src="'. $item["img_platillo"] .'" alt="">
                        <div class="product-quicview">
                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                        <h4 class="product-price">'. $item["Precio_Platillo"] .'</h4>
                        <p>'. $item["Nombre_Platillo"] .'</p>
                        <!-- Add to Cart -->
                        <!--<a href="#" class="add-to-cart-btn">Agregar a la orden</a>-->
                        <button class="btn btn-danger my-cart-btn" data-id="'. $item["IdPlatillo"] .'" data-name="'. $item["Nombre_Platillo"] .'" data-summary="summary 1" data-price="'. $item["Precio_Platillo"] .'" data-quantity="1" data-image="'. $item["img_platillo"] .'">Agregar a la orden</button>
                        <!--<button class="btn btn-danger my-cart-btn" data-id="1" data-name="Elote Dulce1" data-summary="summary 1" data-price="1600" data-quantity="1" data-image="../img/bg1.jpg">Agregar</button>-->
                    </div>
                </div>
            ';
        }
    }
    function ConsultarProductosIndexQV() //QV = QuickView
    {       
        $listaProductos = MostrarProductosModel();
        while($item = mysqli_fetch_array($listaProductos))
        {   
            echo 
            '
                <!-- ****** Quick View Modal Area Start ****** -->
                <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>

                            <div class="modal-body">
                                <div class="quickview_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">
                                                <div class="quickview_pro_img">
                                                    <img src="'. $item["img_platillo"] .'" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="quickview_pro_des">
                                                    <h4 class="title">'. $item["Nombre_Platillo"] .'</h4>
                                                    <div class="top_seller_product_rating mb-15">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <h5 class="price">'. $item["Precio_Platillo"]  .'<span>₡3250</span></h5>
                                                    <p>'. $item["Descripcion_Platillo"] .'</p>
                                                </div>
                                                <!-- Add to Cart Form -->
                                                <form class="cart" method="post">
                                                    <div class="quantity">
                                                        <span class="qty-minus" onclick="var effect = document.getElementById('.'qty'.'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                                        <span class="qty-plus" onclick="var effect = document.getElementById('.'qty'.'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                    </div>
                                                    <button type="submit" name="addtocart" value="5" class="cart-submit">Agregar a la orden</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    }
    
?>