<?php
function d($value='') {
  var_dump($value);
  echo '<br />-----华丽丽的分割线------<br />';
}

function e($value='') {
  echo $value;
  echo '<br />-----华丽丽的分割线------<br />';
}

###数组当中插入数组
//一维的索引数组
$data = [1, 2, 3, 4, 10=>250];

//一维的关联数组
$rela = [
  'beijing' => '北京',
  'shanghai' => '上海',
  'tj' => '天津',
];

d($data);
d($rela);

// 二维数组
$person = array(
  'office' => '办公室',

  //注意：插入第一个数组哟
  'family' => array(
    '爸爸',
    '妈妈',
    'yeye' => '爷爷',
    'nn' => '奶奶',
  ),

  //注意：又插入了一个平级的数组
  'jiaotong' => array(
    '自行车',
    '摩托车',
    '汽车',
    '高铁',
  )
);

d($person);
echo count($person) . '<br/>'; //3
echo count($person['family']) . '<br/>'; // 4
//那如何访问：爷爷和爸爸这两个值呢？
//先写上变量，中括号写上family这个下标，再写上要访问元素的下标。

d($person['family']['yeye']);
d($person['family'][0]);
d($person['jiaotong'][2]);

e($person['family']['yeye']);
e($person['family'][0]);
e($person['jiaotong'][2]);

 ?>
