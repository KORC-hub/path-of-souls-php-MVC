<main>
    <?php include "./views/include/forms.php"; ?>
    <form action="userController.php" method="POST">
        <fieldset>
            <legend>Login</legend>
            <input class="controls" type="email" name="correo" placeholder="User Name" autocomplete="off">
            <input class="controls" type="password" name="contraseña" placeholder="password" autocomplete="off">
            <input class="botons" type="submit" value="Enter">
            <p><a href="<?php echo SERVERURL; ?>registration">¿no tienes cuenta?</a></p>
        </fieldset>
    </form>
</main> 