<?php
class EmployeesController{

    public  function index() {
        include_once("./View/Employees/Index.php");
    }

    public  function create() {
        include_once("./View/Employees/Create.php");
    }

    public  function edit() {
        include_once("./View/Employees/Edit.php");
    }


}

?>