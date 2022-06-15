<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/14
 * Time: 20:47
 */

// 生成器

function gen(){
    yield 'hello';
    yield 'world';
    yield 'php';
}

$generator = gen();
var_dump($generator);  //object(Generator)#1 (0) {}

//foreach ($generator as $v){
//    var_dump($v);
//}

$current = $generator->current();
var_dump($current);  // hello
$generator->next();
$current = $generator->current();
var_dump($current);   // world
$current = $generator->current();
var_dump($current);  // world
$generator->next();
$current = $generator->current();
var_dump($current);  // php
$generator->next();
$current = $generator->current();
var_dump($current);   //null


function gen_number($max){
    for($i=1;$i<=$max;$i++){
        yield $i;
    }
}

// 取一个，打印一个，不会出现溢出
$generator1 = gen_number(PHP_INT_MAX);
foreach ($generator1 as $g){
    var_dump($g);
}