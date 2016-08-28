<?php
$str="
	bajie@aliyun.com;
	bajie@qq.com;
	b-aj.ie@qq.net;
";
	
	$reg='/\w+([\-\.\+]\w+)*@\w+\.\w+/';
	
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
