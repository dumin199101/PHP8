<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 14:17
 */

class A
{
    public function __construct(public int $age = 10,public string $name = "lisi")
    {

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}

$a = new A();
echo $a->age;
echo $a->getName();

