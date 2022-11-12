    <?php
    include_once '../Controller/LoginController.php';
    include_once '../Controller/ComponentesController.php';

    function CSS(){
        echo 
        '
            <head>
                <meta charset="UTF-8">
                <meta name="description" content="">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">       
                <title>Proyecto Ambiente Web C/S</title>
                <!-- Favicon  -->
                <link rel="icon" href="img/core-img/favicon.ico">
                
                <link href="../css/newmenu.css" rel="stylesheet">
                <link href="../css/core-style.css" rel="stylesheet">
                <link href="../css/responsive.css" rel="stylesheet">
                <link href="../css/login.css" rel="stylesheet">
                
                <link href="../css/estilos-inicio.css" rel="stylesheet">
                <link href="../css/footer.css" rel="stylesheet">
                <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
                <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css" />
                <link href="../css/dashboard.css" rel="stylesheet">
                <link href="../css/sidebar-theme.css" rel="stylesheet">
                <link href="../css/formIngresoProducto.css" rel="stylesheet">
                </head>
        ';
    }
    function JS()
    {
        echo
        '
            <script src="../js/resizeee.js"></script>
            <script src="../js/functions.js"></script>
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
            
            <!-- Popper js -->
            <script src="../js/popper.min.js"></script>

            <!-- Plugins js -->
            <!-- Active js 
            <script src="../js/active.js"></script>-->
            <script src="../js/scroll.js"></script>
            <script src="../js/cedulasAPI.js"></script>
            <script src="../js/validarpassword.js"></script>

            <!-- Dashboard js -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <!-- -->
            <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

            <script src="../js/menu-dashboard.js"></script>  

            <script src="../vendor/jquery/jquery.mycart.js"></script>
            <script src="../js/loadcarrito.js"></script>
            <!--Estas tienen que ir despues de los scripts del cdnjs.cloudflare porque sino tira este error  jquery.min.js:2 Uncaught TypeError: $(...).myCart is not a function-->
            <script src="../js/distritos.js"></script>
            <script src="../js/EliminarAdministrador.js"></script>
            <script src="../js/validaciones.js"></script>
        ';
    }
    function JSmenulnormal()
    {
        echo
        '
            <script src="../js/resizeee.js"></script>
            <script src="../js/functions.js"></script>
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
            
            <!-- Popper js -->
            <script src="../js/popper.min.js"></script>

            <!-- Plugins js -->
            <!-- Active js 
            <script src="../js/active.js"></script>-->
            <script src="../js/scroll.js"></script>
            <script src="../js/cedulasAPI.js"></script>
            <script src="../js/validarpassword.js"></script>

            <!-- Dashboard js -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <!-- -->
            <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

            <script src="../js/menu-dashboard.js"></script>  

            <script src="../vendor/jquery/jquery.mycart.js"></script>
            <script src="../js/loadcarrito.js"></script>
            <!--Estas tienen que ir despues de los scripts del cdnjs.cloudflare porque sino tira este error  jquery.min.js:2 Uncaught TypeError: $(...).myCart is not a function-->
            <script src="../js/distritos.js"></script>
            <script src="../js/EliminarAdministrador.js"></script>
            <script src="../js/validaciones.js"></script>
            
        ';
    }
    //Menu a mostrar cuando es un usuario visitante
    function MostrarMenuIndex()
    {
        echo 
        '
            <!-- ****** Header Area Start ****** -->
            <header>
                <section>
                    <img src="../img/shop/Coffee 5.png" alt="" width="200" height="50" style="margin-left: 10%; padding: 5px; margin-top: 20px;">
                    <input id="check" type="checkbox">
                            <label class="icon-menu" for="check">
                            </label>
                                <nav class="menu">
                                <div style="background-color:#544E4E;">
                                <ul>
                                    <li id="inicio">
                                        <a href="index.php" id="inicio2">
                                            Inicio
                                        </a>
                                    </li>
                                    <li id="acercade">
                                        <a href="#" id="acercade2">
                                            Productos más vendidos
                                        </a>
                                    </li>
                                    <li id="servicios">
                                        <a href="#" id="servicios2">
                                            Nosotros
                                        </a>
                                    </li>
                                    <li id="trabajos">
                                        <a href="#" id="trabajos2">
                                            Contacto
                                        </a>
                                    </li>
                                    <li id="menu">
                                        <a href="menu.php" id="menu2">
                                            Menú
                                        </a>
                                    </li>
                                    <li id="carro">
                                        <!-- <a href="cart.php" id="header-cart-btn" target="_blank">-->
                                        <div style="float: right; cursor: pointer;">
                                        <!--dejar la clase "glyphicon glyphicon-shopping-cart my-cart-icon" porque sino se obtiene el error Uncaught TypeError: Cannot read properties of undefined (reading top)-->
                                            <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><i class="ti-bag"></i> Orden de compra<span class="badge badge-notify my-cart-badge"></span>
                                            </span>
                                        </div>
                                        <!--</a>-->
                                    </li>
                                    <li id="iniciarsesion">
                                        <button type="button" value="Iniciar Sesion" name="btnIniciarSesion" class="btn btn-Light"><a href="login.php">Iniciar Sesion</a></button>                                               
                                    </li>
                                </ul>
                                </div>
                            </nav>
                        </input>
                    </img>
                </section>
            </header>       

            <div style="background-image: url(../img/shop/shop3.jpg); background-attachment: fixed;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                    </div>
                </div>
            </div>
        ';
    }
    //Menu a mostrar cuando es un cliente ya registrado
    function MostrarMenuCliente()
    {
        echo 
        '
            <!-- ****** Header Area Start ****** -->
            <header>
                <section>
                    <img src="../img/shop/Coffee 5.png" alt="" width="200" height="50" style="margin-left: 10%; padding: 5px; margin-top: 2px;">
                    <input id="check" type="checkbox">
                            <label class="icon-menu" for="check">
                            </label>
                            <nav class="menu">
                                <div style="background-color:#544E4E;">
                                    <ul>
                                        <li id="inicio">
                                            <a href="index.php" id="inicio2">
                                                Inicio
                                            </a>
                                        </li>
                                        <li id="acercade">
                                            <a href="#" id="acercade2">
                                                Productos más vendidos
                                            </a>
                                        </li>
                                        <li id="servicios">
                                            <a href="#" id="servicios2">
                                                Nosotros
                                            </a>
                                        </li>
                                        <li id="trabajos">
                                            <a href="#" id="trabajos2">
                                                Contacto
                                            </a>
                                        </li>
                                        <li id="menu">
                                            <a href="menu.php" id="menu2">
                                                Menú
                                            </a>
                                        </li>
                                        <li id="carro">
                                            <!-- <a href="cart.php" id="header-cart-btn" target="_blank">-->
                                            <div style="float: right; cursor: pointer;">
                                            <!--dejar la clase "glyphicon glyphicon-shopping-cart my-cart-icon" porque sino se obtiene el error Uncaught TypeError: Cannot read properties of undefined (reading top)-->
                                                <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><i class="ti-bag"></i> Orden de compra<span class="badge badge-notify my-cart-badge"></span>
                                                </span>
                                            </div>
                                            <!--</a>-->
                                        </li>
                                        <li id="cerrarsesion">
                                            <form action="" method="POST">
                                                <input type="submit" value="Cerrar Sesión" name="btnCerrarSesion" class="btn btn-danger">
                                            <form>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </input>
                    </img>
                </section>
            </header>       
            <div style="background-image: url(../img/shop/shop3.jpg); background-attachment: fixed;">
                <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-end">

                </div>
                </div>
            </div>
            </br>
            </br>
            </br>
        ';
    }
    //Menu a mostrar cuando es un usuario administrador
    function MostrarMenuAdmin()
    {
        echo 
        '
            <!-- ****** Header Area Start ****** -->
            <header>
                <section>
                    <img src="../img/shop/Coffee 5.png" alt="" width="200" height="50" style="margin-left: 10%; padding: 5px; margin-top: 2px;">
                    <input id="check" type="checkbox">
                            <label class="icon-menu" for="check">
                            </label>
                            <nav class="menu">
                                <div style="background-color:#544E4E;">
                                    <ul>
                                        <li id="inicio">
                                            <a href="index.php" id="inicio2">
                                                Inicio
                                            </a>
                                        </li>
                                        <li id="acercade">
                                            <a href="#" id="acercade2">
                                                Productos más vendidos
                                            </a>
                                        </li>
                                        <li id="servicios">
                                            <a href="#" id="servicios2">
                                                Nosotros
                                            </a>
                                        </li>
                                        <li id="trabajos">
                                            <a href="#" id="trabajos2">
                                                Contacto
                                            </a>
                                        </li>
                                        <li id="menu">
                                            <a href="menu.php" id="menu2">
                                                Menú
                                            </a>
                                        </li>
                                        <li id="carro">
                                        <!-- <a href="cart.php" id="header-cart-btn" target="_blank">-->
                                            <div style="float: right; cursor: pointer;">
                                            <!--dejar la clase "glyphicon glyphicon-shopping-cart my-cart-icon" porque sino se obtiene el error Uncaught TypeError: Cannot read properties of undefined (reading top)-->
                                                <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><i class="ti-bag"></i> Orden de compra<span class="badge badge-notify my-cart-badge"></span>
                                                </span>
                                            </div>
                                        <!--</a>-->
                                        </li>
                                        <li id="dashboard">
                                            <a href="dashboard.php" id="dashboard">
                                                <i class="ti-user"></i> Dashboard
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </input>
                    </img>
                </section>
            </header>       

            <div style="background-image: url(../img/shop/shop3.jpg); background-attachment: fixed;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                    </div>
                </div>
            </div>
        ';
    }   
    //Menu a mostrar cuando es un usuario administrador cuando visita el dashboard de administrador
    function MostrarMenuDashboard()
    {
        session_start();
        ValidarSesion();
        ValidarSesionClitoAdmin();
        echo 
        '
            <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="#">Mi cafeteria</a>
                        <div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>

                    <!-- sidebar-buscar  -->
                    <div class="sidebar-menu">
                        <div style="background-color:#544E4E;">
                            <ul>
                                <li class="header-menu">
                                    <span>Bienvenido

                                    </span>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-tachometer-alt"></i>
                                        <span>Dashboard</span>
                                        <span class="badge badge-pill badge-danger">Nuevo</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Contenido 1</a>
                                            </li>
                                            <li>
                                            </li>
                                            <li>
                                            <a href="#">Contenido 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>Productos</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="MantenimientoProductos.php">Mantenimiento de Productos</a>
                                            </li>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-chart-line"></i>
                                        <span>Gráficos</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Gráfico Pie</a>
                                            </li>
                                            <li>
                                                <a href="#">Gráfico de Líneas</a>
                                            </li>
                                            <li>
                                                <a href="#">Gráfico de Barras</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>Administradores</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="MantenimientoAdministradores.php">Mantenimiento de Administradores</a>
                                            </li>
                                    </div>
                                </li>
                                <li class="header-menu">
                                    <span>Extra</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        <span>Manual</span> <!--Cargar manual-->
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-book"></i><span>Ver página</span>
                                    </a>
                                </li>
                                <li>
                                    <!--<a href="index.php">
                                        <i class="fa fa-book"></i><span>Cerrar Sesion</span>
                                    </a> -->
                                    <form action="" method="POST">
                                        <i class="fa fa-book"></i>    <span><input type="submit" value="Cerrar Sesión" name="btnCerrarSesion" id="btnCerrarSesion" class="btn btn-danger"></span>
                                    <form>
                                </li>                           
                            </ul>
                        </div>
                    </div>
                    <!-- sidebar-menu  -->
                </div>
            </nav>
        ';
    }
    function MostrarMenuDashboardsinLogout()
    {
        session_start();
        ValidarSesion();
        ValidarSesionClitoAdmin();
        echo 
        '
            <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="#">Mi cafeteria</a>
                        <div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>

                    <!-- sidebar-buscar  -->
                    <div class="sidebar-menu">
                        <div style="background-color:#544E4E;">
                            <ul>
                                <li class="header-menu">
                                    <span>Bienvenido

                                    </span>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-tachometer-alt"></i>
                                        <span>Dashboard</span>
                                        <span class="badge badge-pill badge-danger">Nuevo</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Contenido 1</a>
                                            </li>
                                            <li>
                                            </li>
                                            <li>
                                            <a href="#">Contenido 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="far fa-gem"></i>
                                        <span>Menú</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="ingresarProducto.php">Ingresar productos</a>
                                            </li>
                                            <li>
                                                <a href="#">Modificar productos</a>
                                            </li>
                                            <li>
                                                <a href="#">Eliminar productos</a>
                                            </li>
                                            <li>
                                                <a href="#">Mostrar productos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-chart-line"></i>
                                        <span>Gráficos</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Gráfico Pie</a>
                                            </li>
                                            <li>
                                                <a href="#">Gráfico de Líneas</a>
                                            </li>
                                            <li>
                                                <a href="#">Gráfico de Barras</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>Administradores</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="createAdmin.php">Ingresar nuevos administradores</a>
                                            </li>
                                            <li>
                                                <a href="#">Eliminar administradores</a>
                                            </li>
                                            <li>
                                                <a href="#">Listar administradores</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="header-menu">
                                    <span>Extra</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        <span>Manual</span> <!--Cargar manual-->
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-book"></i><span>Ver página</span>
                                    </a>
                                </li>                          
                            </ul>
                        </div>
                    </div>
                    <!-- sidebar-menu  -->
                </div>
            </nav>
        ';
    }
    function MostrarCartaMenu()
    {
        echo 
        '
            <!-- ****** Header Area Start ****** -->
            <header>
                <section>
                    <img src="../img/shop/Coffee 5.png" alt="" width="200" height="50" style="margin-left: 10%; padding: 5px; margin-top: 20px;">
                    <input id="check" type="checkbox">
                            <label class="icon-menu" for="check">
                            </label>
                            <nav class="menu">
                                <div style="background-color:#544E4E;">
                                    <ul>
                                        <li id="inicio">
                                            <a href="index.php" id="inicio2">
                                                Inicio
                                            </a>
                                        </li>
                                        <li id="menu">
                                            <a href="menu.php" id="menu2">
                                                Menú
                                            </a>
                                        </li>
                                        <li id="carro">
                                            <div style="float: right; cursor: pointer;">
                                            <!--dejar la clase "glyphicon glyphicon-shopping-cart my-cart-icon" porque sino se obtiene el error Uncaught TypeError: Cannot read properties of undefined (reading top)-->
                                                <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><i class="ti-bag"></i> Orden de compra<span class="badge badge-notify my-cart-badge"></span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </input>
                    </img>
                </section>
            </header>       
        ';
    }
    function MenuCheckout()
    {
        echo 
        '
            <!-- ****** Header Area Start ****** -->
            <header>
                <section>
                    <img src="../img/shop/Coffee 5.png" alt="" width="200" height="50" style="margin-left: 10%; padding: 5px; margin-top: 20px;">
                    <input id="check" type="checkbox">
                            <label class="icon-menu" for="check">
                            </label>
                            <nav class="menu">
                                <div style="background-color:#544E4E;">
                                    <ul>
                                        <li id="inicio">
                                            <a href="index.php" id="inicio2">
                                                Inicio
                                            </a>
                                        </li>
                                        <li id="menu">
                                            <a href="menu.php" id="menu2">
                                                Menú
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""><i class="ti-user"></i>
                                            ' . $_SESSION["NombreUsuario"] . '
                                            </a>
                                        </li>
                                        <li id="carro">
                                            <div style="float: right; cursor: pointer;">
                                            <!--dejar la clase "glyphicon glyphicon-shopping-cart my-cart-icon" porque sino se obtiene el error Uncaught TypeError: Cannot read properties of undefined (reading top)-->
                                                <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><i class="ti-bag"></i> Orden de compra<span class="badge badge-notify my-cart-badge"></span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </input>
                    </img>
                </section>
            </header>       
        ';
    }
    function MostrarFooter()
        {
        echo 
        '
            <footer>
                <div class="content-item3">
                    <label class="icon-twitter">
                    </label>
                    <label class="icon-facebook">
                    </label>
                    <label class="icon-instagram" for="">
                    </label>
                    <p> © 2022 Coffee . All Rights Reserved. </p>
                </div>
            </footer>
        ';
    }
?>