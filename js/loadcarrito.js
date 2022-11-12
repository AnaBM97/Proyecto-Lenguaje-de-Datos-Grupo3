$(function () {

    var goToCartIcon = function($addTocartBtn){
    var $cartIcon = $(".my-cart-icon");
    var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
    $addTocartBtn.prepend($image);
    var position = $cartIcon.position();
    $image.animate({
      top: position.top,
      left: position.left
    }, 500 , "linear", function() {
      $image.remove();
    });
  }

  $('.my-cart-btn').myCart({
    currencySymbol: '¢',
    classCartIcon: 'my-cart-icon',
    classCartBadge: 'my-cart-badge',
    classProductQuantity: 'my-product-quantity',
    classProductRemove: 'my-product-remove',
    classCheckoutCart: 'my-cart-checkout',
    affixCartIcon: true,
    showCheckoutModal: true,
    numberOfDecimals: 2,
    
    clickOnAddToCart: function($addTocart){
      goToCartIcon($addTocart);
    },
    afterAddOnCart: function(products, totalPrice, totalQuantity) {
      console.log("afterAddOnCart", products, totalPrice, totalQuantity);
    },
    clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
      console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
    },
    checkoutCart: function(products, totalPrice, totalQuantity) {
      //window.location.replace("http://localhost/ProyectoAmbienteWebC-SGrupo7/View/checkout.php");
      //var $ObtenerCarrito = $("#ObtenerCarrito");
      //var $ObtenerArrays = $("#ObtenerArrays");
      //$ObtenerArrays.empty();
      //var $ObtenerTotales = $("#ObtenerTotales");
      //$ObtenerTotales.empty();

      var checkoutString = "Detalles: ";
      //checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
      $.each(products, function(){
        checkoutString += ("{" + "Id:" + this.id + " Nombre:" + this.name + " Precio:" + this.price + " Cantidad:" + this.quantity + "}");
        $('#ObtenerArrays').append(  
            '<li><span>' + this.name + '('+ this.quantity +')'+'</span> <span>' + this.price + '</span></li>'
        ); 
      });
      $("#txtDetalle").val(checkoutString); 
      $('#ObtenerTotales').append(
      '<li><span>Cantidad de productos</span> <span>'+ totalQuantity +'</span></li>' +
      '<li><span>Envió</span> <span>Gratis</span></li>' +
      '<li><span id="spntotal">Total</span> <span>₡'+ totalPrice +'</span></li>'
      );
     /*$('#TotalesForm').append(
        '<input type="text" class="form-control" id="txtDetalle" name="txtDetalle" min="0" value="">' +
        '<input type="text" class="form-control" id="txtMonto" name="txtMonto" min="0" value="' + totalPrice + '">'
      );*/
      $("#txtMonto").val(totalPrice);  
      //alert(checkoutString)
      console.log("checking out", products, totalPrice, totalQuantity);
    },
  });
});
