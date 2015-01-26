<?php
header("Content-type: text/html; charset=utf-8");

$id = trim($_GET['id']);

include 'fzsql.php';
$mysql = new FzSql();
$sql = "SELECT * from `teacher` WHERE `id` = '$id'";
$res = $mysql->getLine( $sql );
$sql = "SELECT * from `teacher_pingjia` WHERE `tid` = '{$res['id']}' ORDER BY `id` DESC";
$res2 = $mysql->getData( $sql );
?>
<!DOCTYPE html>
<html>
<head lang="zh-cn">
	<meta charset="UTF-8">
	<title><?=$res['name']?> 老师的评价--陕理工小助手</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<meta http-equiv="Cache-Control" content="no-siteapp" />
</head>
<body>
<div class="am-g">
	<p style="color:red"><strong>现在请给评价</strong></p><a href="index.php">返回首页</a>
		<hr>
		<?php
			echo "姓名：".$res['name'];
			echo "<br>带课：".$res['subject'];
		?>
		<br>
		<br>
		<form method="post" action="ok.php">
			<input type="hidden" name="tid" value="<?=$res['id']?>">
      <select name="pingjia">
			  <option>好评</option>
			  <option>差评</option>
			</select>
      <br>
      <textarea placeholder="评价详情" name="info"></textarea>
      <br>
      <input type="submit" value="提交">
    </form>
		<br>
		<hr>
		<?php
    	if ($res2 != null) {
    		foreach ($res2 as $v) {
	    		echo "{$v['pingjia']}:{$v['info']}<br>";
	    	}
    	}
    ?>
	<hr>
	点击右上角分享到朋友圈
	<hr>
    <p>© 2015 <a href="http://mp.weixin.qq.com/s?__biz=MjM5NTgxNTc4MQ==&mid=206325860&idx=1&sn=8a23c69646fbe48072e40730fab40b65#rd">陕理工小助手</a>.</p>
</div>
</body>
</html>