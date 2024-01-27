<?php
    class PagesController{
        public function inicio(){
            include_once('View/Pages/Inicio.php');
        }
        public function error(){
            include_once("View/Pages/Error.php");
        }

    }

?>