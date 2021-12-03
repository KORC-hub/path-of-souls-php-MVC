<main>
    <?php include "./views/include/forms.php"; ?>
    <form action="<?php echo SERVERURL;?>database/validation.php" method="POST" autocomplete="off">
        <fieldset>
            <legend>Login</legend>
            <input class="controls" type="text" name="nickname" placeholder="Nickname">
            <input class="controls" type="password" name="password" placeholder="password" >
            <input class="botons" type="submit" value="Enter">
            <p><a href="<?php echo SERVERURL; ?>registration">¿no tienes cuenta?</a></p>
        </fieldset>
    </form>
</main> 