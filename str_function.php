<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/2
 * Time: 9:44
 */


// 字符串相关函数

$str = "hello,world,haha";

// 从字符串中截取子串第一次出现的位置，到字符串末尾
$strstr = strstr($str, "wor");
var_dump($strstr);

// 从字符串中截取，从起始位置开始，截取长度为length
$substr = substr($str, 3, 5);
var_dump($substr);

// 从字符串中查找子串第一次出现的起始坐标位置
$strpos = strpos($str, "world");
var_dump($strpos);

// 计算字符串长度
$strlen = strlen($str);
var_dump($strlen);

// 将字符串转化为数组
$explode = explode(",", $str);
var_dump($explode);

// 字符串替换
$str_replace = str_replace("world", "世界", $str);
var_dump($str_replace);

// ASCII与字符相互转化
$chr = chr(97);
var_dump($chr);
$ord = ord('a');
var_dump($ord);

// 取出字符串左右两边的字符
$trim = trim("  hello,world,,,,,,", " ,");
var_dump($trim);

// 填充字符串
$str_pad = str_pad("hello", 10, "*");
var_dump($str_pad);

// 重复输出字符串
$str_repeat = str_repeat("hello", 5);
var_dump($str_repeat);

// 加密
$md5 = md5("hello");
var_dump($md5);
$sha1 = sha1("hello");
var_dump($sha1);

// 转换大小写
$strtoupper = strtoupper("hello");
var_dump($strtoupper);
$strtolower = strtolower("HI,IM");
var_dump($strtolower);
$ucfirst = ucfirst("baidu meituan");
var_dump($ucfirst);
$ucwords = ucwords("baidu meituan");
var_dump($ucwords);

// 字符串反转
$strrev = strrev("hello,world");
var_dump($strrev);

// 随机打乱字符串
$str_shuffle = str_shuffle("hello,world");
var_dump($str_shuffle);





