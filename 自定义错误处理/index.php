<?php
	/**
		 �Զ����������
	 */

	set_error_handler("myerror");    //ע�����Լ������Ĵ��󱨸溯��

	$message= "";  //ȫ�ֱ���

	function myerror($error_level,$error_message,$error_file,$error_line)
	{
		global $message;  //����ȫ�ֱ���

		$message .= "���󼶱�<font color='red'>{$error_level}</font>,������Ϣ��<font color='red'>{$error_message}</font>,���������ļ���<font color='red'>{$error_file}</font>,���������У�<font color='red'>{$error_line}</font>.<br>";
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
