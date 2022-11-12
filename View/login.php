<?php 
    include_once "componentes.php"; 
    include_once "../Controller/LoginController.php";
?>
<html>
<?php CSS(); ?>
<body> 
    <div class="loginbox">
        <img src="../img/student.png" class="avatar"/>
        <h1>Inicio Sesión</h1>
        <form action="" id="form1" method="POST">
            <p>Usuario</p>
            <input type="email" name="txtcorreo" class="user" placeholder="Digite  su correo" required="required" maxlength="50" size="50" autocomplete="off" />
            <p>Contraseña</p>
            <input type="password" name="txtpass" class="pass" placeholder="*********" required="required" maxlength="50" size="50" autocomplete="off" />
            <input type="submit" id="btnLogin" name="btnLogin" class="envio" value="Continuar"> 
            <br />
            <br />
            <a href="signup.php">Registrarse</a>
        </form>
    </div>
    <?php JS(); ?>
</body> 
</html>