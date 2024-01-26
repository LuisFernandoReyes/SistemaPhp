<?php
    class PagesController{
        public function inicio(){
            include_once('View/Pages/inicio.php');
        }
        public function error(){
            include_once("View/Pages/error.php");
        }

    }

?>