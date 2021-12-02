<?php

    $peticionAjax = true;
    require_once "../config/app.php";

    if (false) {
        # code...
    }else {
        session_start(['name' => 'PoS']);
        session_unset();
        session_destroy();
        header("location:".SERVERURL."");
        exit();
    }

?>