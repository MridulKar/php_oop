<?php

class Employee{

    public static function name($name){
        self::$name = $name;
        return new static;
    }

    public static function designation($designation){
        self::$designation = $designation;
        return new static;
    }

    public static function salary($salary){
        self::$salary = $salary;
        return new static;
    }

    public static function employeeInfo(){
        return $value =" 'The employee name is '. self::$name.'designation is'.self::$designation.', salary is '.self::$salary.";
    }
}

echo Employee::name("Mridul Kar")::designation("Software Developer")::salary('xyz')::employeeInfo();

echo "<br>";

echo "<pre>"; print_r($object);