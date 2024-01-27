<?php
    class PagesController{
        public function index(){
            include_once('View/Pages/Index.php');
        }
        public function error(){
            include_once("View/Pages/Error.php");
        }

    }

?>