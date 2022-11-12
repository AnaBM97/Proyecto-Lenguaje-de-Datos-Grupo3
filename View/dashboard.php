<?php 
    include_once "componentes.php"; 
    include_once '../Controller/LoginController.php';
?>
<html>
    <?php CSS(); ?>
    <body>
            <?php MostrarMenuDashboard(); ?>
            <!-- sidebar-wrapper  -->
            <main class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <h2 style="color:white;">Bienvenido
                            <?php
                                
                                echo $_SESSION["NombreUsuario"];
                            ?>
                             al dashboard de adminsitrador</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <h3 style="color:white;">Apariencia</h3>
                            <p style="color:white;">Selecciona el tema que mas te guste</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <a href="#" data-theme="chiller-theme" class="theme chiller-theme selected"></a>
                            <a href="#" data-theme="ice-theme" class="theme ice-theme"></a>
                            <a href="#" data-theme="cool-theme" class="theme cool-theme"></a>
                            <a href="#" data-theme="light-theme" class="theme light-theme"></a>
                        </div>
                        <div class="form-group col-md-12">
                            <p style="color:white;">También puedes cambiar de imágen</p>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="#" data-bg="bg1" class="theme theme-bg selected"></a>
                            <a href="#" data-bg="bg2" class="theme theme-bg"></a>
                            <a href="#" data-bg="bg3" class="theme theme-bg"></a>
                            <a href="#" data-bg="bg4" class="theme theme-bg"></a>
                        </div>
                    </div>
                    <hr>
                </div>
            </main>
            <!-- page-content" -->
            
        </div>
        <?php MostrarFooter(); ?>
        <?php JSmenulnormal(); ?>
    </body>
</html>