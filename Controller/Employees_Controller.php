<?php
include('conexion.php');
DataBase::createInstance();
class EmployeesController{

    public  function index() {
        include_once("./View/Employees/Index.php");
    }

    public  function create() {
        if($_POST){
            print_r($_POST);

        }
        include_once("./View/Employees/Create.php");
    }

    public  function edit() {
        include_once("./View/Employees/Edit.php");
    }


}

?>