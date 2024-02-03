<?php

class Employee{
    public static function create($name, $email){
        $conexionDB=DataBase::createInstance();
        $sql=$conexionDB->prepare("INSERT INTO employees (name, email) VALUES (?,?)");
        $sql->execute(array($name,$email));

    }
}

?>