<?php

class Employee{

    public function name($name){
        $this->name = $name;
        return $this;
    }

    public function designation($designation){
        $this->designation = $designation;
        return $this;
    }

    public function salary($salary){
        $this->salary = $salary;
        return $this;
    }

    public function employeeInfo(){
        return "The employee name is " .$this->name. ", designation is ".$this->designation.", salary is ".$this->salary;
    }
}

$object = new Employee;


echo $object->name("Mridul Kar")->designation("Software Developer")->salary(25000)->employeeInfo();

echo "<br>";

echo "<pre>"; print_r($object);



