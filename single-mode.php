<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/15
 * Time: 21:52
 */
class Student{

    private static $instance = null;

    private function __construct()
    {}

    private function __clone(){}

    public static function getStudent(){
       if(!self::$instance instanceof self){
           self::$instance = new self();
       }
       return self::$instance;
    }
}

$student1 = Student::getStudent();
$student2 = Student::getStudent();

var_dump($student1);
var_dump($student2);
var_dump($student1===$student2);