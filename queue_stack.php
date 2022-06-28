<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/28
 * Time: 11:09
 */

$arr = [];

// 模拟栈：后进先出
array_push($arr,1);
array_push($arr,2);
array_push($arr,3);

var_dump($arr);

$array_pop = array_pop($arr);
var_dump($array_pop);
$array_pop = array_pop($arr);
var_dump($array_pop);
$array_pop = array_pop($arr);
var_dump($array_pop);

array_unshift($arr,4);
array_unshift($arr,5);
array_unshift($arr,6);
var_dump($arr);
$array_shift = array_shift($arr);
var_dump($array_shift);
$array_shift = array_shift($arr);
var_dump($array_shift);
$array_shift = array_shift($arr);
var_dump($array_shift);


// 模拟队列：先进先出
array_push($arr,7);
array_push($arr,8);
array_push($arr,9);
var_dump($arr);
$var = array_shift($arr);
var_dump($var);
$var = array_shift($arr);
var_dump($var);
$var = array_shift($arr);
var_dump($var);
