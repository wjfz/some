<?php
header("Content-type: text/html; charset=utf-8");
$field = array('love', 'caption', 's_pv', 'sp_pv', 'sid');
$tags = '';

$json = file_get_contents('http://open.iciba.com/dsapi/');
$arr = json_decode($json,true);

$mysql = new SaeMysql();
$sql = "INSERT INTO `dailysentence` (`sid`) VALUES ({$arr['sid']});";
$mysql->runSql( $sql );
if( $mysql->errno() != 0 )
{
	exit( "DB Error:" . $mysql->errmsg() );
}

$sql = '';
$sql = "UPDATE `dailysentence` SET `sid` = {$arr['sid']}";
foreach ($arr as $k => $v) {
	if (in_array($k, $field)) {
		continue;
	}
	
	if ($k == 'tags') {
		foreach ($v as $key => $value) {
			$tags .= $value['name'].',';
		}
		$sql .= ", `{$k}` = '{$tags}'";
	}else{
		$sql .= ", `{$k}` = '{$v}'";
	}
}
$sql .= " WHERE `sid` = {$arr['sid']};";
$mysql->runSql( $sql );
if( $mysql->errno() != 0 )
{
	exit( "DB Error:" . $mysql->errmsg() );
}

echo 'ok';