<?php
function d($value='') {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

####其他的关联数组声明方式
$drink['nf'] = '农夫山泉';
$cocacola = '可口可乐';

//当然可以是变量哟
$drink['k1'] = $cocacola;
d($drink);

$data = array('k1' => $cocacola, );
d($data);

 ?>
