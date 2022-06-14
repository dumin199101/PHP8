<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/14
 * Time: 16:27
 */

namespace base\reflect;

// 反射Demo
class Student
{
    public function __construct(public string $name, public int $age)
    {

    }

    public function getInfo(): void
    {
        echo $this->name . "," . $this->age;
    }
}

$reflectionClass = new \ReflectionClass(Student::class);
$reflectionProperties = $reflectionClass->getProperties();
foreach ($reflectionProperties as $property){
    var_dump($property->getName());
}

$reflectionMethods = $reflectionClass->getMethods();
foreach ($reflectionMethods as $method){
    var_dump($method->getName());
}

$newInstance = $reflectionClass->newInstance("zhangsan", 22);
$method1 = $reflectionClass->getMethod("getInfo");
$method1->invoke($newInstance);