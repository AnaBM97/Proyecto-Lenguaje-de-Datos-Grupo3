<?php 
    include_once "componentes.php"; 
    include_once '../Controller/ProductosController.php';
?>
<html>   
<?php CSS(); ?>
<body> 
    <?php MostrarMenuDashboardsinLogout(); ?>
   <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card">
                    <h5 class="text-center mb-4">Ingrese nuevos productos</h5>
                    <form class="form-card" method="POST">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Nombre del platillo<span class="text-danger"> *</span></label> 
                                <input type="text" id="txtnombre" name="txtnombre" placeholder="" required> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Precio del platillo<span class="text-danger"> *</span></label> 
                                <input type="text" id="txtprecio" name="txtprecio" placeholder="" onkeypress="return valida(event)"> 
                            </div>
                        </div> 
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Imagen categoria<span class="text-danger"> *</span></label> 
                                <!--input type="text" id="txtimg" name="txtimg" placeholder="">-->
                                <input type="file" name="txtimg" id="txtimg" />  
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Categoria<span class="text-danger"> *</span></label> 
                                <!--<input type="text" id="txtcategoria" name="txtcategoria" placeholder="" value="">-->  
                                <select name="dropdown_categoria" id="dropdown_categoria">
                                    <option value="1">Desayuno o Almuerzo</option>
                                    <option value="2">Reposteria</option>
                                    <option value="3">Bebida caliente o fria</option>
                                </select> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> 
                                <label class="form-control-label px-3">Descripcion del platillo<span class="text-danger"> *</span></label>
                                <input type="text" id="txtdescripcion" name="txtdescripcion" placeholder="" value=""> 
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> 
                                <input type="submit" id="btnAddProducto" name="btnAddProducto" class="btn-block btn-primary" value="Ingresar producto"></input> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    
    <?php MostrarMenuDashboard(); ?>
    <?php JS(); ?>
</body> 
</html>