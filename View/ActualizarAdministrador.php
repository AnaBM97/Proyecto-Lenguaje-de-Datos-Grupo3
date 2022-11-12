<?php 
    include_once "componentes.php"; 
    include_once '../Controller/AdministradoresController.php';

    $Cedula = $_GET["q"];
    $Usuario = ConsultarAdministrador($Cedula);
?>

<html>
<?php CSS(); ?>
<body>
    <div class="loginbox" style="height: 720px;">
            <img src="../img/student.png" class="avatar"/>
            <h2>Registrar Administrador</h2>
            <form action="" id="form1" method="POST">
                <p>Cédula: <?php echo $Usuario["ID_Usuario"]; ?></p>
                <input type="text" id="txtid" name="txtid" class="user" placeholder="Digite la cedula" required="required" maxlength="50" size="50" autocomplete="off" onblur="cedulasAPI();" value="<?php echo $Usuario["ID_Usuario"]; ?>" readonly style="display: none;"/>
                <p>Nombre</p>
                <input type="text" id="txtnombre" name="txtnombre" class="user" placeholder="Nombre completo" required="required" maxlength="50" size="50" autocomplete="off" value="<?php echo $Usuario["Nombre_Usuario"]; ?>"/>
                <p>Correo</p>
                <input type="email" id="txtemail" name="txtemail" class="user" placeholder="Digite el correo" required="required" maxlength="50" size="50" autocomplete="off" value="<?php echo $Usuario["correo"]; ?>"/>    
                <p>Contraseña</p>
                <input type="password" id="txtpass" name="txtpass" class="pass" placeholder="*********" required="required" maxlength="50" size="50" autocomplete="off" />
                <p>Confirme su contraseña</p>
                <input type="password" id="txtpassconfirm" name="txtpassconfirm" class="pass" placeholder="*********" required="required" maxlength="50" size="50" autocomplete="off" />
                <input type="text" id="txtvalidacion" name="txtvalidacion" class="pass" placeholder="Validacion" required="required" maxlength="50" size="50" autocomplete="off" disabled/>
                <input type="submit" id="btnActualizarAdmin" name="btnActualizarAdmin" class="envio" value="Registrar">
                <br />
                <br />
                <br />
            </form>
        </div>
    <?php MostrarMenuDashboard(); ?>
    <?php JS(); ?>
</body>
</html>