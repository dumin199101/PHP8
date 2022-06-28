<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/28
 * Time: 15:08
 */

class Car
{
    public static function model()
    {
//        self::getModel();  // 调用当前类方法
        static::getModel(); // 延迟静态绑定，调用运行时绑定的类中的方法
    }

    public static function getModel()
    {
        echo "I am a car\n";
    }
}

class Mercedes extends Car{
    public static function getModel()
    {
        echo "I am Mercedes\n";
    }
}

Car::model();
Mercedes::model();