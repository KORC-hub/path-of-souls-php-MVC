<main>
    <?php include "./views/include/forms.php"; ?>
    <form class="formAjax" action="<?php echo SERVERURL;?>database/add-user.php" method="POST" autocomplete="off">
        <fieldset>
            <legend>Create Account</legend>
            <input class="controls" type="text" name="userName" placeholder="nickname" required>
            <input class="controls" type="email" name="email" placeholder="Ingrese su Correo" required>
            <input class="controls" type="password" name="password" placeholder="Ingrese su Contraseña" required>
            <input type="radio" required> Estoy de acuerdo con <a href="#">Terminos y Condiciones</a>
            <input class="botons" type="submit" value="Create">
            <p><a href="<?php echo SERVERURL; ?>/">¿Ya tengo Cuenta?</a></p>
        </fieldset>
    </form>
</main>