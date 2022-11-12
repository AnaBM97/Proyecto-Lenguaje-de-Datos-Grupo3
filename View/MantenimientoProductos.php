<?php 
    include_once "componentes.php"; 
    include_once '../Controller/ProductosController.php';
    include_once '../Controller/LoginController.php';
?>

<html>
<?php CSS(); ?>
<body>
    <?php MostrarMenuDashboard(); ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-12">
                        <table id="tUsuarios" class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Descripcion</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php ConsultarProductos(); ?>
                            </tbody>
                        </table>
                        <a href="ingresarProducto.php" class="btn btn-warning">Agregar Producto</a>
                    </div>
            </div>
        </div>
    </section>
    <?php JS(); ?>
</body> 
</html>