<?php
    class DataBase{
        private static $instance=null;

        public static function createInstance(){

            if(!isset( self::$instance)){
                $PDOOptions[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
                self::$instance= new PDO('mysql:host=localhost;dbname=phpsystem','root','',$PDOOptions);
                echo "Connection made";
            }
            return self::$instance;

        }
    }

?>