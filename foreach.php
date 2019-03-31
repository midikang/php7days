<?php
function d($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

/*
语法:
foreach( 要循环的数组变量 as [键变量 =>] 值变量){

//循环的结构体
}
*/

$data = [
        'fj' => '凤姐',
        'fr' => '芙蓉',
    ];


foreach($data  as $key => $value){
        echo $key . '-------' . $value . '<br />';
}

// 如果只想读取值, $key=>可以省略
foreach ($data as $value) {
  echo $value . '<br/>';
}

$data2 = array(
        0 => '中国',
        100 => '美国',
        20 => '韩国',
        300 => '德国',
    );

foreach ($data2 as $k => $v) {
  echo $k . '--------' . $v . '<br/>';
}

foreach ($data2 as $v) {
  echo  $v . '<br/>';
}

echo  '-----------------------<br/>';

$data3 = array(
        0 => array(
            '中国' => 'china',
            '美国' => 'usa',
            '德国' => ' Germany',
        ),
        1 => array(
            '湖北' => 'hubei',
            '河北' => 'hebei',
            '山东' => 'shandong',
            '山西' => 'sanxi',
        ),
);

foreach ($data3 as  $value) {
  //第一次循环把国家的数组赋值给了$value
  d($value);
}

foreach ($data3 as  $value) {
  //第一次循环把国家的数组赋值给了$value
  //第二次循环把中国的省份的数组又赋值给了$value
  foreach ($value as $k => $v) {
    echo $k . '--------' . $v . '<br/>';
  }
  echo '----------分割线-----------<br />';

}
