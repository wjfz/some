<?php
header("Content-type: text/html; charset=utf-8");

include 'fzsql.php';
$mysql = new FzSql();
$sql = "SELECT * from `teacher`";
$res = $mysql->getData( $sql );
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
	<p>选择老师</p>
    <hr>
    <?php
    	if ($res != null) {
    		foreach ($res as $v) {
	    		echo "{$v['name']}:《{$v['subject']}》&nbsp;&nbsp;<a href='t.php?id={$v['id']}'>就是TA</a><br><br>";
	    	}
    	}
    ?>
    <br>
    <br>
    <a href="c.php">没搜到？点击这里创建</a>
    <hr>
    <p>© 2015 <a href="http://mp.weixin.qq.com/s?__biz=MjM5NTgxNTc4MQ==&mid=206325860&idx=1&sn=8a23c69646fbe48072e40730fab40b65#rd">陕理工小助手</a>.</p>
</div>
</body>
</html>