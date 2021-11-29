<?php

    class viewModel{

        /* Modelo para obtener las vistas */
        protected static function getViewModel($view){
            $whiteList = ["home","art","code","effects","about","login","registration"];
            if(in_array($view, $whiteList)){
                if(is_file("./views/content/".$view."-view.php")){
                    $content = "./views/content/".$view."-view.php";
                } else {
                    $content = "404";
                }
            } elseif($view == "index") {
                $content = "login";
            } else {
                $content = "404";
            }
            return $content;
        }
    }


?> 