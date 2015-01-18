<?php
header("Content-type: audio/mp3; charset=utf-8");
$t = isset($_GET["t"]) ? $_GET["t"] : 'Hello world.';
// 需要生成语音的文字

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://api.microsofttranslator.com/V2/http.svc/Speak?appId=9CF5D9435A249BB484EC6DB50FFFB94C6733DEFB&language=zh-cn&format=audio/mp3&text=".$t);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER,0);
$output = curl_exec($ch);
curl_close($ch);
echo ($output);