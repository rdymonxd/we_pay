<?php
    #incluimos el modelo
    require_once "./model/viewModel.php";
    #creamos la clase
    #
    class viewController extends viewModel{ # herreda de viewModel
        # Controlador para obtenear la plantilla

        public function get_template_controller(){
            return require_once "./view/template.php";
        }
        # Controlador para obtenear la vista
        public function get_view_controller(){
            if(isset($_GET['views'])){
                $route = explode("/",$_GET['views']);#los separa por medio de explore con / a / b /c
                $reply = viewModel::get_view_model($route[0]); #obtiene el primer valor despues localhost /
            }else{
                $reply="login";
            }
            return $reply;
        }

    }
?>