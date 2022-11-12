<?php 
    include_once "componentes.php"; 
    include_once "../Controller/MostrarProductosController.php";
?>
<html>
    <?php CSS(); ?>
    <body> 
        <div id="wrapper">
            <?php MostrarCartaMenu(); ?>
            <!-- Menu Section Start-->
            <section class="new_arrivals_area section_padding_100_0 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section_heading text-center">
                                <h2>Menú</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php ConsultarProductosIndexQV();?>
                <div class="container">
                    <div class="row karl-new-arrivals">
                    <?php ConsultarTodosProductos();?>
                    </div>
                </div>
            </section>
            <!-- End of menu Section -->
            <?php MostrarFooter(); ?>
        </div>
        <?php JSmenulnormal(); ?>
    </body>
</html>