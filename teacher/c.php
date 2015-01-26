<?php
header("Content-type: text/html; charset=utf-8");

if($_POST){
  $name = trim($_POST['name']);
  $subject = trim($_POST['subject']);
  if (empty($name) || empty($name)) {
     exit("老师名字和带的课都不能为空。<br><a href=\"c.php\">返回</a>");
  }

  include 'fzsql.php';
  $mysql = new FzSql();
  $sql = "INSERT INTO `teacher` (`id`, `name`, `subject`) VALUES (NULL, '$name', '$subject');";
  $mysql->runSql( $sql );
  $lastid = $mysql->lastId();
  header('Location: t.php?id='.$lastid);
  exit();
}

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
<body>
<div class="am-g">
	<p>创建老师<a href="index.php">返回首页</a></p>
    <hr>
    <form method="post">
      <input type="text" name="name" value="" placeholder="输入老师的姓名">
      <br>
      <input type="text" name="subject" value="" placeholder="输入带的课">
      <br>
      <div class="am-cf">
        <input type="submit" name="" value="创建">
      </div>
    </form>
    <hr>
    <p>© 2015 <a href="http://mp.weixin.qq.com/s?__biz=MjM5NTgxNTc4MQ==&mid=206325860&idx=1&sn=8a23c69646fbe48072e40730fab40b65#rd">陕理工小助手</a>.</p>
</div>
</body>
</html>