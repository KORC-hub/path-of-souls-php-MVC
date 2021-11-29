<?php

    include_once "./config/app.php";
    include_once "./controllers/viewController.php";

    $template = new viewController();
    $template -> getTemplateController();

    
?>

