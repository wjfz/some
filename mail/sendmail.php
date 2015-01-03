<?php
header("Content-type: text/html; charset=utf-8");

require_once ('email.class.php');

$mailsubject = "晚安。";//邮件主题
$mailbody = "该睡觉了，晚安。";//邮件内容



//##########################################
$smtpserver = "smtp.exmail.qq.com";//SMTP服务器
$smtpserverport = 25;//SMTP服务器端口
$smtpuser = "admin@qq.com";//SMTP服务器的用户帐号
$smtppass = "PASSWORD";//SMTP服务器的用户密码
$smtpusermail = "admin@qq.com";//修改这块可以自定义发件人
$smtpemailto = "18000000000@189.cn";//发送给谁  
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
##########################################
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
$smtp->debug = false;//是否显示发送的调试信息
if($smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype)){
	echo '成功';
}else{
	echo '失败';
}
?>