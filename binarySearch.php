<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/2
 * Time: 15:53
 */


// 二分查找，前提必须是一个有序数组

$arr = [1, 4, 6, 10, 20, 25, 30, 35, 46, 50, 70, 88, 92, 100];

function binarySearch(array $arr, int $target): int
{
    // 左右两边的坐标
    $left = 0;
    $right = count($arr) - 1;
    while ($left <= $right) {
        $middle = ceil(($left + $right) / 2);
        if ($arr[$middle] == $target) return $middle;
        if ($arr[$middle] > $target) {
            $right = $middle - 1;
        } else {
            $left = $middle + 1;
        }
    }
    return -1;
}

$i = binarySearch($arr, 88);
var_dump($i);