<?php
####1. 设置时区

echo '默认时区：' . date_default_timezone_get () . '<br/>';

//定义一下时区常量，以后你可以放到配置文件里
define('TIME_ZONE','Asia/shanghai');

//执行函数
// date_default_timezone_set(TIME_ZONE);

echo date('Y-m-d H:i:s');


####2.time()获取当前的unix时间戳

echo time() . '<br/>';

#date函数用于将一个时间进行格式化输出，以方便时间的显示或存储
echo date('Y年m月d日 H时i分s秒') . '<br/>';

#返回getdate 数组的详细信息。
$mytime = getdate( );
print_r($mytime);
echo "年：" . $mytime['year']. '<br/>';
echo "月：" . $mytime['mon']. '<br/>';
echo "日：" . $mytime['mday']. '<br/>';
echo "时：" . $mytime['hours']. '<br/>';
echo "分：" . $mytime['minutes']. '<br/>';
echo "秒：" . $mytime['seconds']. '<br/>';
echo "星期名称：" . $mytime['weekday']. '<br/>';
echo "月份名称：" . $mytime['month']. '<br/>';
echo "时间戳：" . $mytime['0']. '<br/>';


echo  mktime(13 ,15 , 30, 8,18, 2008);

echo date("m-d-Y h:m:s"). '<br/>';
echo date("m-d-Y h:m:s",mktime(10,15,35,date("m"),date("d"),date("Y"))). '<br/>';
echo date("m-d-Y h:m:s",mktime(10,15,35,date("m"),date("d")-30,date("Y"))). '<br/>';


//now为现在的当前时间
echo strtotime("now")."<br />";
//2000年9月10日
echo strtotime("10 September 2000")."<br />";
//当前时间加一天
echo strtotime("+1 day")."<br />";
//当前时间加一周
echo strtotime("+1 week")."<br />";
//当前时间加一周2天4小时2秒
echo strtotime("+1 week 2 days 4 hours 2 seconds")."<br />";
//下一个星期四
echo strtotime("next Thursday")."<br />";
//上一个星期一
echo strtotime("last Monday")."<br />";
