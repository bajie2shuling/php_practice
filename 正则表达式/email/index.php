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
		echo "������ʽ:".$reg."<br>"."���ַ�����".$str."<br>"."ƥ��ɹ���"."<br>";
		print_r($arr);
		echo '</pre>';
	}
	else
	{
		echo "ƥ��ʧ�ܣ�";
	}
?>
