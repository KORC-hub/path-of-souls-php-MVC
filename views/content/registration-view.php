<main>
    <?php include "./views/include/forms.php"; ?>
    <fieldset>
        <legend>Create Account</legend>
        <input class="controls" type="text" name="firstName" placeholder="Nombre" autocomplete="off">
        <input class="controls" type="text" name="lastName" placeholder="Apellido" autocomplete="off">
        <input class="controls" type="text" name="userName" placeholder="User Name" autocomplete="off">
        <input class="controls" type="email" name="correo" placeholder="Ingrese su Correo" autocomplete="off">
        <input class="controls" type="password" name="contraseña" placeholder="Ingrese su Contraseña" autocomplete="off">
        <input type="radio"> Estoy de acuerdo con <a href="#">Terminos y Condiciones</a>
        <input class="botons" type="submit" value="Create">
        <p><a href="<?php echo SERVERURL; ?>/">¿Ya tengo Cuenta?</a></p>
    </fieldset>
</main>