<?php
//引入数据库连接
include 'conn.php';

###一、计算出分页所需的参数

####总数
$count_sql = 'select count(id) as c from user';
$result = mysqli_query($conn, $count_sql);
$data = mysqli_fetch_assoc($result);
$count = $data['c'];

####当前页
if(isset($_GET['page'])){
  $page = (int)$_GET['page'];
} else{
  $page = 1;
}

###最后一页

//每页显示数
$num = 5;

$total = ceil($count / $num);

//修正第一页和最后一页
if ($page<=1) {
  $page = 1;
}

if ($page >= $total) {
  $page = $total;
}

$offset = ($page -1) * $num;


$sql = "select id, username, createtime, createip
from user order by id desc
limit $offset, $num
";

$result = mysqli_query($conn, $sql);

if($result && mysqli_num_rows($result)){

  echo '<form action="delete.php" method="post">';
  echo '<table width="800" border="1">
  <tr>
    <th>选择</th>
    <th>用户名</th>
    <th>创建时间</th>
    <th>IP</th>
    <th colspan="2">操作</th>
  </tr>
  ';

  while ($row=mysqli_fetch_assoc($result)) {
    echo "<tr>";

    echo '<td><input type="checkbox" name="id[]" value="' . $row['id'] . '" /></td>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . date('Y-m-d H:i:s', $row['createtime']) . '</td>';
    echo '<td>' . long2ip($row['createip']) . '</td>';
    echo '<td><a href="edit.php?id=' . $row['id'] . '">编辑用户</a></td>';
    echo '<td><a href="delete.php?id=' . $row['id'] . '">删除用户</a></td>';


    echo "</tr>";
  }

  // 显示分页
  echo '<tr>
    <td colspan="6">
      <a href="list.php?page=1">首页</a>
      <a href="list.php?page=' . (($page-1) <= 1 ? 1 : ($page-1)) . '">上一页</a>
      <a href="list.php?page=' . (($page+1) >= $total ? $total : ($page+1)) . '">下一页</a>
      <a href="list.php?page=' . $total . '">尾页</a>
      当前是第'. $page . '页 共' . $total . '页
    </td>
  </tr>';

  echo '</table>';

  echo '<input type="submit" value="删除"/>';
  echo '</form>';
} else {
  echo "没有数据";
}

//关闭连接
mysqli_close($conn);
?>
