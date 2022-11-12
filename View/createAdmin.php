<?php 
    include_once "componentes.php"; 
    include_once '../Controller/AdministradoresController.php';
    include_once '../Controller/LoginController.php';
?>
<html>
<?php CSS(); ?>
<body> 
    
    <div class="loginbox" style="height: 720px;">
        <img src="../img/student.png" class="avatar"/>
        <h2>Registrar Administrador</h2>
        <form action="" id="form1" method="POST">
            <p>Cédula</p>
            <input type="text" id="txtid" name="txtid" class="user" placeholder="Digite la cedula" required="required" maxlength="50" size="50" autocomplete="off" onblur="cedulasAPI();" onkeypress="return valida(event)" />
            <p>Nombre</p>
            <input type="text" id="txtnombre" name="txtnombre" class="user" placeholder="Nombre completo" required="required" maxlength="50" size="50" autocomplete="off" onkeypress="return validaLetras(event)"/>
            <p>Correo</p>
            <input type="email" id="txtemail" name="txtemail" class="user" placeholder="Digite el correo" required="required" maxlength="50" size="50" autocomplete="off" />    
            <p>Contraseña</p>
            <input type="password" id="txtpass" name="txtpass" class="pass" placeholder="*********" required="required" maxlength="50" size="50" autocomplete="off" />
            <p>Confirme su contraseña</p>
            <input type="password" id="txtpassconfirm" name="txtpassconfirm" class="pass" placeholder="*********" required="required" maxlength="50" size="50" autocomplete="off" />
            <input type="text" id="txtvalidacion" name="txtvalidacion" class="pass" placeholder="Validacion" required="required" maxlength="50" size="50" autocomplete="off" disabled/>
            <input type="submit" id="btnAddAdmin" name="btnAddAdmin" id="btnAddAdmin" class="envio" value="Registrar">
            <br />
            <br />
            <br />
        </form>
    </div>
    <?php MostrarMenuDashboard(); ?>
    <?php JS(); ?>
</body> 
</html>