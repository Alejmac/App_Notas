<?php
// si existe el complemento de la vista
    if(isset($_GET["view"])){
        $view = $_GET["view"];

        // para nohace nu rooteo y navegar en diferentes vistas
        require "src/views/". $view ."php";

    }else{
        // si no existe el complemento de la vista
        require "src/views/home.php";


    }




?>