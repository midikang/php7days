<?php
$arr = array(
  '教学部' => array(
    array('李某', '18', '人妖'),
    array('高某', '20', '男'),
    array('张某', '21', '妖人'),
  ),
  '宣传部' => array(
    array('李某', '18', '人妖'),
    array('高某', '20', '男'),
    array('张某', '21', '妖人'),
  ),
  '财务部' => array(
    array('李某', '18', '人妖'),
    array('高某', '20', '男'),
    array('张某', '21', '妖人'),
  ),
);

foreach ($arr as $key => $value) {
  echo $key . '<br/>';
  foreach ($value as $v) {
    // echo  '长度:'. count($v) . '<br/>';
    for ($i=0; $i < count($v); $i++) {
      echo $v[$i] . ' ';
    }
    echo '<br/>';
  }
}

 ?>
