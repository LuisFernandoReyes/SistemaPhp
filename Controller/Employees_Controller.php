<?php
include_once('Model/Employee.php');
include_once('conexion.php');
DataBase::createInstance();
class EmployeesController{

    public  function index() {
        $employees= Employee::read();
        include_once("./View/Employees/Index.php");
    }

    public  function create() {
        if($_POST){
            print_r($_POST);
            $name=$_POST['name'];
            $email=$_POST['email'];
            Employee::create($name,$email);
            header("location:?controller=Employees&accion=index");

        }
        include_once("./View/Employees/Create.php");
    }

    public  function edit() {
        include_once("./View/Employees/Edit.php");
    }

    public  function delete() {
        //Validar que el valor existe en la base de datos
        $id=$_GET["id"] ;
        Employee::delete($id);
        header("location:?controller=Employees&accion=index");
    }
}

?>