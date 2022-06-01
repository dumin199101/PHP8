<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 15:18
 */

class Country{
    public function __construct(public string $name)
    {
    }
}

$country = null;

$country = new Country("china");

echo $country?->name;