<?php

    if ($peticionAjax) {
        require_once "../models/userModel.php";
    } else {
        require_once "./models/userModel.php";
    }

    class userController extends userModel {
        
    }

?> 