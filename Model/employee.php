<?php

class Employee{

    public $id;
    public $name;
    public $email;

    public function __construct($id,$name,$email) {
        $this->id=$id;
        $this->name = $name;
        $this->email= $email;
    }

    public static function read(){
        $EmployeesList=[];
        $conexionDB=DataBase::createInstance();
        $sql=$conexionDB->query("SELECT * FROM employees");
        foreach($sql->fetchAll() as $employee){
            $EmployeesList[]= new Employee($employee['id'],$employee['name'],$employee['email']);
        } 
        return $EmployeesList;
    }

    public static function create($name, $email){
        $conexionDB=DataBase::createInstance();
        $sql=$conexionDB->prepare("INSERT INTO employees (name, email) VALUES (?,?)");
        $sql->execute(array($name,$email));

    }
}

?>