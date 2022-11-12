<?php 
    include_once "componentes.php"; 
    include_once "../Controller/SignupController.php";
?>
<html>
<?php CSS(); ?>
<body> 
    <div class="loginbox" style="height: 700px;">
        <img src="../img/student.png" class="avatar"/>
        <h1>Registrate</h1>
        <form action="" id="form1" method="POST">
            <p>Cédula</p>
            <input type="text" id="txtid" name="txtid" class="user" placeholder="Digite la cedula" required="required" maxlength="50" size="50" autocomplete="off" onblur="cedulasAPI();" onkeypress="return valida(event)"/>
            <p>Nombre</p>
            <input type="text" id="txtnombre" name="txtnombre" class="user" placeholder="Nombre completo" required="required" maxlength="50" size="50" autocomplete="off" onkeypress="return validaLetras(event)"/>
            <p>Correo</p>
            <input type="email" id="txtemail" name="txtemail" class="user" placeholder="Digite el correo" required="required" maxlength="50" size="50" autocomplete="off" />    
            <p>Contraseña</p>
            <input type="password" id="txtpass" name="txtpass" class="pass" placeholder="*********" required="required" maxlength="50" size="50" autocomplete="off" />
            <p>Confirme su contraseña</p>
            <input type="password" id="txtpassconfirm" name="txtpassconfirm" class="pass" placeholder="*********" required="required" maxlength="50" size="50" autocomplete="off" />
            <input type="text" id="txtvalidacion" name="txtvalidacion" class="pass" placeholder="Validacion" required="required" maxlength="50" size="50" autocomplete="off" disabled/>
            <input type="submit" id="btnSignup" name="btnSignup" class="envio" value="Registrarse">
            <br />
            <br />
            <a href="login.php">Iniciar Sesion</a>
        </form>
    </div>
    <?php JS(); ?>
</body> 
</html>