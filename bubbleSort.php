<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 15:42
 */

/**
 * 手写冒泡排序
 * @param array $array
 * @return array
 */

function bubbleSort(array $array): array
{
    // 计算数组长度
    $len = count($array);

    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - 1; $j++) {
            // 比较相邻连个数的大小
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;

}

$arr = [2, 5, 1, 7, 12, 44, 7, 9];
$arr2 = bubbleSort($arr);
var_dump($arr);
var_dump($arr2);