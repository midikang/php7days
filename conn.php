<?php
//数据库连接信息

// 引入数据库配置
include 'config.php';

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PWD);

//如果有错误，存在错误号
if(mysqli_errno($conn)){
	echo mysqli_error($conn);
	exit;
}
$database=DB_NAME;
mysqli_select_db($conn, $database);
mysqli_set_charset($conn, "utf8");

?>
