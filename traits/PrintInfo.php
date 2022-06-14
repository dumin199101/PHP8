<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/14
 * Time: 10:07
 */

namespace foo;

use demo\SayHello;
use demo\SayWorld;

// 自动加载
class AutoLoader
{
    public static function register($classname)
    {
        $arr = explode("\\", $classname);
        include "./" . $arr[0] . "\\" . $arr[1] . ".php";
    }
}

spl_autoload_register(["foo\\AutoLoader", "register"]);


class PrintInfo
{
    // Trait，如果方法名字冲突，使用insteadof跟as运算符解决
    use SayHello,SayWorld{
        SayHello::say insteadof SayWorld;  // 优先执行SayHello的say
        SayWorld::say as sayW;  // 使用别名
    }

    public function printI()
    {
        echo 'PrintI';
    }

    public function printT()
    {
        PrintInfo::printI();
        self::printI();
    }
}

$printInfo = new PrintInfo();
$printInfo->say();
$printInfo->sayW();
$printInfo->printT();
