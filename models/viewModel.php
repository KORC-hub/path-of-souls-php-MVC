<?php

    class viewModel{

        /* Modelo para obtener las vistas */
        protected static function getViewModel($view){
            $whiteList = ["home","art","code","effects","about","perfil","rank"];
            if(in_array($view, $whiteList)){
                if(is_file("./views/content/".$view."-view.php")){
                    $content = "./views/content/".$view."-view.php";
                } else {
                    $content = "404";
                }
            } elseif($view == "index") {
                $content = "login";
            } elseif($view == "registration"){
                $content = "registration";
            } else {
                $content = "404";
            }
            return $content;
        }
    }


?> 