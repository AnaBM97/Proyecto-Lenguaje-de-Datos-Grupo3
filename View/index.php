<?php 
    include_once "componentes.php"; 
    include_once "../Controller/MostrarProductosController.php";
?>
<html>
    <?php CSS(); ?>
    <body>
        <div id="wrapper">
            <?php 
                //MostrarMenuIndex();            
                session_start();  
               // MostrarMenuIndex();  
                $role = "";
                if(isset($_SESSION["RolUsuario"])){
                    $role = $_SESSION["RolUsuario"];         
                }  
                if($role == "1"){
                    MostrarMenuAdmin(); 
                }elseif($role == "2"){
                    MostrarMenuCliente();
                }else{
                    MostrarMenuIndex(); 
                }
            ?>
            <?php ConsultarProductosIndexQV();?>
            <!-- ****** New Arrivals Area Start ****** -->
            <section class="new_arrivals_area section_padding_100_0 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section_heading text-center">
                                <h2>Productos más vendidos</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row karl-new-arrivals">
                    <?php ConsultarProductosIndex();?>
                    </div>
                </div>
            </section>
            
            <!-- ****** New Arrivals Area End ****** -->
            <!-- ****** Other Content Area Start ****** -->
            <div class="content-two">
                <div class="content-details">
                    <div class="content-details-for">
                        <label class="icon-heart">
                        </label>
                        <h3>
                            Cariño
                        </h3>
                        <p>
                            ¡Cada momento en nuetra tienda, consumiendo nuestro productos es único!  <br/>
                            Vos elegís el ambiente que más te guste para disfrutar de tu platillo favorito.  <br/>
                            ¿Venís? Siempre te recibiriemos en nuestros locales con cariño y gratitud.    <br/>
                        </p>
                    </div>
                    <div class="content-details-for">
                        <label class="icon-laptop">
                        </label>
                        <h3>
                            ¡Pedí a domicilio!
                        </h3>
                        <p>
                            En nuestra cocina, no importa si deseas comer viendo la television, con tu familia <br/>
                            o en el patio de tu hogar, lo que nos importa es siempre darte una  <br/>
                            experiencia inigualable con nuestros platillos y bebidas.     <br/>
                        </p>
                    </div>
                    <div class="content-details-for">
                        <label class="icon-support">
                        </label>
                        <h3>
                            Nuestro horario de atención
                        </h3>
                        <p>
                            Lunes - Jueves: 11:30 am - 10:00 pm  | Viernes - Sábado: 8:00 am - 10:00 pm <br/>  Domingo: 8:00 am - 8:00 pm                       
                        </p>
                    </div>
                </div>
            </div>
            <div class="content-three">
                <div class="content-item">
                    <h3>
                        También puedes hacer tus pedidos através de la app de UBER Eats
                    </h3>
                    <div class="content-img-item">
                        <img src="../img/img2.png">
                            <img src="../img/img3.png">
                                <img src="../img/img4.png">
                                </img>
                            </img>
                        </img>
                    </div>
                </div>
            </div>
            <div class="content-for">
                <div class="content-item2">
                    <h3>
                        CONTACTO
                    </h3>
                    <p>
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, voluptate. Rem tempora consequuntur iste, amet incidunt aliquid inventore, voluptate obcaecati maxime illo ullam eos dolores. Nemo iusto praesentium libero suscipit!                    </p>
                    <img src="../img/shop/reservation-bg.jpg">
                    </img>
                </div>
            </div>
            <div class="content-five">
                <div class="content-item3">
                    <h3>
                        NUESTRO HORARIO DE ATENCIÓN
                    </h3>
                    <p>
                        Lunes - Jueves: 11:30 am - 10:00 pm  <br/>  Viernes - Sábado: 8:00 am - 10:00 pm <br/>  Domingo: 8:00 am - 8:00 pm  
                    </p>
                </div>
            </div>
            <!-- ****** Other Content Area End ****** -->
            <?php MostrarFooter(); ?>
        </div>
        <?php JS(); ?>
</body>
</html>