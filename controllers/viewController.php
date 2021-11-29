<?php

    require_once "./models/viewModel.php";

    class viewController extends viewModel{

        /* Controlardor para obtener la plantilla */
        public function getTemplateController(){
            return require_once "./views/template.php";
        }

        /* Controlador para obtener las vistas */
        public function getViewController(){
            if (isset($_GET['views'])) { // views viene de .htaccess
                $ruta = explode("/",$_GET['views']);
                $responses = viewModel::getViewModel($ruta[0]);
            } else {
                $responses = "login";
            }
            return $responses;
        }

    }

?>