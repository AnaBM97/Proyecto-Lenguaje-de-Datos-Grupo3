<?php 
    include_once "componentes.php"; 
    include_once '../Controller/IngresarProductoController.php';    
    //include_once '../Controller/LoginController.php';  
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
                    <h5 class="text-center mb-4">Modificar productos</h5>
 
                    <table id="tUsuarios" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Categoria</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ConsultarProductos(); ?>
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div> 
    
    <?php JS(); ?>
</body> 
</html>