<?php
    class viewModel{# logica de NEGOCIO
        /* ---ESTE ES UN MODELO PARA OBTENER LAS VISTAS */
        protected static function get_view_model($view){# funcion o metodo
            $listWhite = [];
            if(in_array($view,$listWhite)){
                if(is_file("./views/content/".$view."-view.php")){
                    $contenido = "./views/content/".$view."-view.php";# devuelve la vista correspondiente
                }else{
                    $contenido = "404"; #como no existe la pagina devuelve 404
                }

            }elseif($view == 'login' || $view=="index"){ # no permitir ninguna pagina despues del solamente index y login
                $contenido = "login"; # muestra la pantalla de inicio de session
            }else{
                $contenido = "404";
            }
            return $contenido;
        }
    
    }
?>