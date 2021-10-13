<?php 
    class ControladorPaginas{
        public function inicio(){
            //rutas (no incluir ./ porque es la ruta de la url)
            include_once("views/paginas/inicio.php");
        }

        public function error(){
            include_once("views/paginas/error.php");
        }
    }
?>