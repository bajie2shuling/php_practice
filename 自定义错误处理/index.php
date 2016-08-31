<?php
	/**
		 自定义错误处理函数
	 */

	set_error_handler("myerror");    //注册你自己声明的错误报告函数

	$message= "";  //全局变量

	function myerror($error_level,$error_message,$error_file,$error_line)
	{
		global $message;  //导入全局变量

		$message .= "错误级别：<font color='red'>{$error_level}</font>,错误信息：<font color='red'>{$error_message}</font>,错误所在文件：<font color='red'>{$error_file}</font>,错误所在行：<font color='red'>{$error_line}</font>.<br>";
	}

	gettype($a);
	echo "1111111111<br>";

	
	gettype();
	echo "2222222222<br>";

	
//	get_type();
	echo "3333333333<br>";

	echo "-------------------------------------------------------<br>";

	echo $message;
?>
