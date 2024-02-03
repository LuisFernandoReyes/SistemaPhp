<?php
include_once('Model/employee.php');
include_once('conexion.php');
DataBase::createInstance();
class EmployeesController{

    public  function index() {
        include_once("./View/Employees/Index.php");
    }

    public  function create() {
        if($_POST){
            print_r($_POST);
            $name=$_POST['name'];
            $email=$_POST['email'];
            employee::create($name,$email);

        }
        include_once("./View/Employees/Create.php");
    }

    public  function edit() {
        include_once("./View/Employees/Edit.php");
    }


}

?>