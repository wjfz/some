<?php
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head lang="zh-cn">
  <meta charset="UTF-8">
  <title>淘师网--陕理工小助手</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
</head>
<?php
if($_POST){
  $tid = trim($_POST['tid']);
  $pingjia = trim($_POST['pingjia']);
  $info = trim($_POST['info']);

  include 'fzsql.php';
  $mysql = new FzSql();
  $sql = "INSERT INTO `teacher_pingjia` (`id`, `tid`, `pingjia`, `info`) VALUES (NULL, '$tid', '$pingjia', '$info');";
  $mysql->runSql( $sql );

  $lastid = $mysql->lastId();
  if ($lastid) {
  	echo "添加成功<br>";
 	echo "<a href=\"t.php?id={$tid}\">点击查看</a>";
  } else {
  	echo "意外情况添加失败<br>";
 	echo "<a href=\"index.php\">返回首页</a>";
  }
  
  
  exit();
}