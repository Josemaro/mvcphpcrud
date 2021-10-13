<?php
    // echo $controlador;
    // echo $accion;
    //Hacer dinamico el enrutamiento
    include_once("controllers/controlador_".$controlador.".php");
    $objControlador = "Controlador".ucfirst($controlador);
    $controlador = new $objControlador();
    $controlador -> $accion();

?>

