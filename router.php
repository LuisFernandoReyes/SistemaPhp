<?php
echo $controller;
echo $accion;

//Se manda a llamar "Controller/Pages_Controller.php" de manera dinámica en la siguiente línea
include_once("Controller/".$controller."_Controller.php");
//

// $ObjController Guarda el nombre "PagesController"
$ObjController = ucfirst($controller)."Controller";

//Se instancia PagesController de la clase Pages_Controller
$controller = new $ObjController();

$controller->$accion();

?>
