<?php
$str="
http://www.lampbrother.net
https://www.lampbrother.com
ftp://www.lampbrother.org
ftps://www.lampbrother.org
ftps://www.lampbrother.org/php/demo.inc.php
ftps://www.lampbrother.org/php/demo.inc.php?username=admin&p=123456
";
	
	$reg='/(https?|ftps?)\:\/\/www\.(.*?)\.(com|net|org)([\w\.\?\=\&\/]*)?/';
	
	if(preg_match_all($reg,$str,$arr))
	{
		echo '<pre>';
		echo "正则表达式:".$reg."<br>"."和字符串：".$str."<br>"."匹配成功！"."<br>";
		print_r($arr);
		echo '</pre>';
	}
	else
	{
		echo "匹配失败！";
	}
?>
