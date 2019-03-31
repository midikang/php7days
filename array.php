<?php

$kele = array('只有不断努力才能博得未来',
  10 => 'NoAlike',
   'PHP学院' ,
   '去PHP学院去PHP',
   19 => '凤姐和芙蓉我都爱' ,
   '杨幂臭脚我最爱');

//打印显示$kele
echo '<pre>';
var_dump($kele);
echo '</pre>';


$minren = array(
            '杨幂',
            '王珞丹',
            '刘亦菲',
            '黄圣依'
        );


//如何向这$minren这个数组中增加元素呢

//猜猜范冰冰的下标是多少？
$minren[] = '范冰冰';

$minren[100] = '范爷';

//它的下标又为几呢？
$minren[] = '李晨';
var_dump($minren);
/*
array(7) { [0]=> string(6) "杨幂" [1]=> string(9) "王珞丹" [2]=> string(9) "刘亦菲" [3]=> string(9) "黄圣依"
[4]=> string(9) "范冰冰" [100]=> string(6) "范爷" [101]=> string(6) "李晨" }
*/


unset($minren[3]);
var_dump($minren);
$minren[]='黄渤';
var_dump($minren);

// 直接修改
$minren[0]='成龙';
var_dump($minren);
