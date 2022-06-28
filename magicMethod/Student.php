<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/28
 * Time: 18:12
 */

namespace magic;


class Student
{

    // 创建对象的时候自动调用
    public function __construct(public int $age,public string $name)
    {

    }

    // 设置一个不存在的属性
    public function __set($prop,$value)
    {
        echo "设置属性：" . $prop . ",值为：" . $value . PHP_EOL;
        $this->$prop = $value;
    }

    // 访问一个不存在的属性
    public function __get($prop)
    {
        echo "访问：" . $prop . "属性" . PHP_EOL;
    }

    // 去掉一个不存在的属性
    public function __unset($prop){
        echo "__unset方法被调用,要去掉的属性" . $prop . PHP_EOL;
    }

    // 判断一个不存在的属性是否存在
    public function __isset($prop)
    {
        echo "__isset方法被调用,属性" . $prop . "存在否？"  . PHP_EOL;
    }

    // 调用一个不存在的方法
    public function __call($name,$args)
    {
        echo "call方法被调用，调用了一个不存在的方法：" . $name . PHP_EOL;
    }

    // 调用一个不存在的静态方法
    public static function __callStatic($name,$args)
    {
        echo "__callStatic方法调用，调用一个不存在的静态方法：" . $name . PHP_EOL;
    }

    // 当对象被当作函数调用
    public function __invoke()
    {
        echo "invoke方法被调用" . PHP_EOL;
    }


    // 这里必须返回一个string类型不然会报致命错误,输出一个对象时会被调用
    public function __toString()
    {
        return "__toString方法被调用，学生年龄：" . $this->age . "，学生姓名：" . $this->name . PHP_EOL;
    }

    // 当对象被销毁时候自动触发
    public function __destruct()
    {
        echo "__destruct方法被调用";
    }
}

$student = new Student(22, "lisi");
echo $student;
$student();
$student->addr;
$student->tel = "123456";
var_dump($student);
unset($student->school);
isset($student->school);
$student->say();
Student::getScore();
