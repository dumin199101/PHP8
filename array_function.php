<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/2
 * Time: 10:35
 */

// 数组相关函数

// 索引数组
$arr = [1, 5, 9, 7, 10, 7, 8];
// 关联数组

$arr2 = [
    "name" => "lieyan",
    "age" => 22,
    "addr" => "china"
];

$arr3 = [
    ["name" => "zhangsan", "city" => "beijing", "age" => 22],
    ["name" => "lisi", "city" => "tianjin", "age" => 32],
    ["name" => "wangwu", "city" => "tianjin", "age" => 12],
    ["name" => "yangliu", "city" => "beijing", "age" => 24],
    ["name" => "zhengqi", "city" => "hangzhou", "age" => 28]
];

$arr4 = [1, 3, 5];


// 计算数组中元素个数
$count = count($arr);
var_dump($count);

// 在数组中搜素给定的值，如果搜索成功，返回键值
$array_search = array_search(5, $arr);
var_dump($array_search);
$array_search = array_search("lieyan", $arr2);
var_dump($array_search);

// 删除数组中的重复元素
$array_unique = array_unique($arr);
var_dump($array_unique);

// 删除数组最后一个元素，并返回被删除的元素
$array_pop = array_pop($arr);
var_dump($array_pop);
var_dump($arr);

// 在数组末尾添加一个元素，返回数组处理之后元素的个数
$array_push = array_push($arr, 10);
var_dump($array_push);
var_dump($arr);

// 在数组头部删除一个元素，返回被删除的元素
$array_shift = array_shift($arr);
var_dump($array_shift);
var_dump($arr);

// 在数组头部添加一个元素，返回数组处理完之后元素的个数
$array_unshift = array_unshift($arr, 100);
var_dump($array_unshift);
var_dump($arr);

// 对数组进行排序，排序成功返回true
$sort = sort($arr);
var_dump($sort);
var_dump($arr);
rsort($arr);
var_dump($arr);

// 数组合并
$array_merge = array_merge($arr, $arr4);
var_dump($array_merge);

// 数组差集
$array_diff = array_diff($arr, $arr4);
var_dump($array_diff);

// 数组交集
$array_intersect = array_intersect($arr, $arr4);
var_dump($array_intersect);

// 返回数组中的值
$array_values = array_values($arr2);
var_dump($array_values);

// 返回数组中的键
$array_keys = array_keys($arr2);
var_dump($array_keys);

// 返回数组中元素之和
$array_sum = array_sum($arr4);
var_dump($array_sum);

// 删除数组中的某一部分，并用另一部分替代它，返回被删除的元素
$array_splice = array_splice($arr4, 1, 2, [6, 7, 8]);
var_dump($array_splice);
var_dump($arr4);

// 数组元素替换
$array_replace = array_replace([1, 3, 5, 7, 9], [2, 4, 6]);
var_dump($array_replace);

// 数组转为字符串
$implode = implode(",", $arr);
var_dump($implode);

// 打乱数组中的元素,成功返回true
$shuffle = shuffle($arr4);
var_dump($shuffle);
var_dump($arr4);

// 数组中的键值交换
$array_flip = array_flip($arr2);
var_dump($array_flip);

// 数组中是否含有某元素
$in_array = in_array("lieyan", $arr2);
var_dump($in_array);

// 数组中是否有某个键
$array_key_exists = array_key_exists("name", $arr2);
var_dump($array_key_exists);

// 用给定的变量名创建一个数组
$a = 1;
$b = 2;
$c = 3;
$compact = compact("a", "b", "c");
var_dump($compact);

// 数组截取
$array_slice = array_slice($arr, 1, 3);
var_dump($array_slice);

// 排序后，保持索引关联
asort($arr2);
var_dump($arr2);
// 按照键排序
ksort($arr2);
var_dump($arr2);
// 自然排序
$arr4 = ["img10.png", "img8.png", "img101.png", "img9.png"];
natsort($arr4);
var_dump($arr4);

// 随机数组中的元素,返回值为随机元素索引值
$array_rand = array_rand($arr);
var_dump($arr);
var_dump($arr[$array_rand]);

// 数组填充
$array_pad = array_pad($arr, 10, 0);
var_dump($array_pad);

// 数组分块
$array_chunk = array_chunk($arr, 3);
var_dump($array_chunk);

//数组过滤
$arr_list = range(1, 10);
$array_filter = array_filter($arr_list, function ($item) {
    if ($item % 2 != 0) {
        return $item;
    }
});
var_dump($array_filter);

// 用回调函数迭代地将数组简化为单一的值
$array_reduce = array_reduce($arr_list, function ($init, $item) {
    $init += $item;
    return $init;
}, 0);

var_dump($array_reduce);

//为数组的每个元素应用回调函数,需要return
$array_map = array_map(function ($item) {
    if ($item % 2 == 0) {
        return $item * 2;
    }else{
        return $item;
    }
}, $arr_list);

var_dump($array_map);

// 为数组的每个元素应用回调函数，需要对元素加&
array_walk($arr_list,function(&$item){
    $item = $item + 1;
});

var_dump($arr_list);
