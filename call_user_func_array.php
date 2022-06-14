<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/14
 * Time: 11:35
 */

function printInfo($args1){
    var_dump(func_num_args());
    $func_get_args = func_get_args();
    foreach ($func_get_args as $args){
        var_dump($args);
    }
}

call_user_func_array("printInfo",["hello","world"]);

function printInfo2($args1){
    var_dump(func_num_args());
    $func_get_args = func_get_args();
    foreach ($func_get_args as $args){
        var_dump($args);
    }
}

call_user_func("printInfo2","hello","world");