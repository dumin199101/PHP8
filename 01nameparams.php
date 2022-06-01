<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 11:28
 */
declare(strict_types=1);

function namedArgs(int $a,int $c,int $b=1,int $d = 3): int
{
    return $a + $b + $c + $d;
}

$namedArgs = namedArgs(a:1, c: 4);
echo $namedArgs;