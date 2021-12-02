<!DOCTYPE html>

<html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Path of Souls</title>
       <meta http-equiv="X-UA-compatible" content="ie=edge"> 
       <meta name="description" content="">
       <?php include "./views/include/links.php"; ?>
       <?php include "./views/include/scripts.php"; ?>
    </head>
    <body>
        <?php 

            $peticionAjax=false;
            require_once "./controllers/viewController.php";

            $IV = new viewController();
            $views = $IV->getViewController();  

            if ($views == "login" || $views == "registration" || $views == "404") {
                require_once "./views/content/".$views."-view.php"; 
            } else {
                include "./views/include/nav.php"; 
                include $views;
            }
        ?>
    </body>
</html>