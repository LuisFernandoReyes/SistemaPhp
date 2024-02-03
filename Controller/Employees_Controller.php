<?php
include_once('Model/Employee.php');
include_once('conexion.php');
DataBase::createInstance();
class EmployeesController{

    public  function index() {
        print_r(Employee::read());
        include_once("./View/Employees/Index.php");
    }

    public  function create() {
        if($_POST){
            print_r($_POST);
            $name=$_POST['name'];
            $email=$_POST['email'];
            Employee::create($name,$email);

        }
        include_once("./View/Employees/Create.php");
    }

    public  function edit() {
        include_once("./View/Employees/Edit.php");
    }


}

?>