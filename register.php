<?php

//引入数据库连接
include 'conn.php';

//####一、 判断重复密码
if(trim($_POST['password']) != trim($_POST['repassword'])) {
  exit('两次密码不一致，请返回上一页');
}

// ####二、 准备好写入的数据
$username = trim($_POST['username']);
$password = trim($_POST['password']);

$time = time();
$ip = ip2long($_SERVER['REMOTE_ADDR']);

####三、连接数据库、判断错误、选择库和字符集
//连接数据库
// 变量$conn通过conn.php文件引入

####四、组合SQL语句
$sql = "insert into user(username, password, createtime, createip) " .
  "values('" . $username . "', '" . $password . "'," . $time . "," . $ip .")";
echo $sql;
####五、发送语句，判断状态
$result = mysqli_query($conn, $sql);
if($result){
  echo "注册成功";
  header('Location: list.php');
} else {
  echo "注册失败"  . $conn->error;
}

####六、关闭数据库连接
mysqli_close($conn);

?>
