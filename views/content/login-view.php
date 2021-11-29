<body>
    <?php include "./views/include/forms.php"; ?>
    <fieldset>
        <legend>Login</legend>
        <input class="controls" type="email" name="correo" placeholder="Ingrese su Correo" autocomplete="off">
        <input class="controls" type="password" name="contraseña" placeholder="Ingrese su Contraseña" autocomplete="off">
        <input type="radio"> Estoy de acuerdo con <a href="#">Terminos y Condiciones</a>
        <input class="botons" type="submit" value="Entrar">
        <p><a href="<?php echo SERVERURL; ?>views/content/registration-view.php">¿no tienes cuenta?</a></p>
    </fieldset>
</body>