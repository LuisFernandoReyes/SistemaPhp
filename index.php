<?php
if( isset($_GET['controller']) && isset($_GET['accion'])){
    $controller= $_GET['controller'];
    $accion= $_GET['accion'];
}

require("../Sistema/View/template.php");
?>