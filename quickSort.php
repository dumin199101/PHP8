<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 15:55
 */

/**
 * 手写快速排序
 * @param array $arr
 * @return array
 *
 */
function quickSort(array $arr): array
{
    // 判断递归结束条件
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }

    // 取出数组中的第一个值，作为比较基准
    $key = $arr[0];

    $arr_left = $arr_right = [];

    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] <= $key) {
            $arr_left[] = $arr[$i];
        } else {
            $arr_right[] = $arr[$i];
        }
    }

    //对左右两边的数组进行递归排序
    $arr_left = quickSort($arr_left);
    $arr_right = quickSort($arr_right);

    // 将排序完的数组合并
    return array_merge($arr_left, array($key), $arr_right);

}

$arr = [2, 5, 1, 7, 12, 44, 7, 9];
$arr = quickSort($arr);
var_dump($arr);
