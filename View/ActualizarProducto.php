<?php 
    include_once "componentes.php"; 
    include_once '../Controller/ProductosController.php';

    $id = $_GET["q"];
    $producto = ConsultarProducto($id);
?>

<html>
<?php CSS(); ?>
<body>
<div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
                <div class="card">
                <form action="" id="form1" method="POST">
                    <p style="display:none;">Id: <?php echo $producto["IdPlatillo"]; ?></p>
                    <img src="<?php echo $producto["img_platillo"]; ?>" width="400" height="500">
                    <label class="form-control-label px-3">Imagen categoria<span class="text-danger"> *</span></label> 
                    <!--input type="text" id="txtimg" name="txtimg" placeholder="">-->
                    <input type="file" name="txtimg" id="txtimg" />
                    <input type="text" id="txtid" name="txtid" class="user" placeholder="ID del producto" required="required" maxlength="50" size="50" autocomplete="off" value="<?php echo $producto["IdPlatillo"]; ?>" readonly style="display: none;"/>
                    <p>Nombre del producto</p>
                    <input type="text" id="txtnombre" name="txtnombre" class="user" placeholder="Nombre completo" required="required" maxlength="50" size="50" autocomplete="off" value="<?php echo $producto["Nombre_Platillo"]; ?>"/>
                    <p>Precio</p>
                    <input type="text" id="txtprecio" name="txtprecio" class="user" placeholder="Digite el precio" required="required" maxlength="50" size="8" autocomplete="off" value="<?php echo $producto["Precio_Platillo"]; ?>" onkeypress="return valida(event)"/>    
                    <p>Descripcion</p>
                    <input type="text" id="txtdescripcion" name="txtdescripcion" class="user" placeholder="Digite la descripcion" required="required" maxlength="300" size="90" autocomplete="off" value="<?php echo $producto["Descripcion_Platillo"]; ?>"/>    
                    <br />
        
                    <input type="submit" id="btnActualizarProducto" name="btnActualizarProducto" class="envio" value="Actualizar">
                    
                    <br />
                    <br />
                </form>
                </div>
        </div>
    </div> 
    <?php MostrarMenuDashboard(); ?>
    <?php JS(); ?>
</body>
</html>

