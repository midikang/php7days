<?php

//三维数组我们说了概念，那我们直接上手实验看看效果：
function d($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

function e($value='') {
  echo $value;
  echo '<br />-----华丽丽的分割线------<br />';
}

$area = array(
  'china' => array(
    '上海',
    '天津',
    '北京' => array(
      'hd' => '海淀',
      '朝阳',
      '房山',
      'cp' => '昌平',
    ),
    '河南' => array(
      '郑州',
      '开封',
      'pds' => '平顶山',
    ),
  ),
  'usa' => array(
    '华盛顿',
    '旧金山',
    '纽约' => array(
      '曼哈顿区',
      '皇后区',
      '布鲁克林区',
    ),
  ),
);

d($area);

//读取华盛顿
d($area['usa'][0]);
d($area['usa']['0']);

//读取：布鲁克林
d($area['usa']['纽约'][2]);

//读取：昌平
d($area['china']['北京']['cp']);

//修改cp下标的值改为：西城区
$area['china']['北京']['cp'] = '西城区';
d($area['china']['北京']['cp']);

 ?>
