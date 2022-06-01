<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 14:52
 */
class B{
    public function __construct(public int|string $age,public string|array $addr)
    {

    }

    /**
     * @return array|string
     */
    public function getAddr(): array|string
    {
        return $this->addr;
    }


}

$b = new B(22,["北京","上海"]);
var_dump($b->age);
var_dump($b->getAddr());

