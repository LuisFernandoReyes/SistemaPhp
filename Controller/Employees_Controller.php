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
        
        if ($_POST) {//
            $id= $_POST["id"];
            $name= $_POST["name"];
            $email= $_POST["email"];

            Employee::update( $id, $name ,$email );
            header("location:?controller=employees&accion=index");
        }
        $id=$_GET["id"] ;
        //Guardamos la informacion del empleado por ID en la variable employee
        $employee= Employee::search($id);


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