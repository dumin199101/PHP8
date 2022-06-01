<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 14:59
 */

echo match (8.0) {
    8.0 => 'hello,world',
    '8.0' => 'hello,php',
};

switch (8.0){
    case 8.0:
        echo 'hello,java';
        break;
    case '8.0':
        echo 'hello,php';
        break;
}