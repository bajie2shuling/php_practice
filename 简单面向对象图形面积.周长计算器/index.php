<html>
	<head>
		<title>��ͼ�Σ��ܳ�&�����������</title>
		<meta http-equiv="Content-type" content="text/html; charset=gb2312">
	</head>

	<body>
		<center>
			<h1>��ͼ�Σ��ܳ�&�����������</h1>
			<a href="index.php?action=rectangle">����</a>||
			<a href="index.php?action=circle">Բ��</a>
		</center>
		<hr><br>
		<?php
			error_reporting(E_ALL & ~E_NOTICE);
			function __autoload($className)
			{
				include strtolower($className).".class.php";
			}

			if(!empty($_GET['action']))
			{
				$className=ucfirst($_GET['action']);

				$shape=new $className($_POST);
				$shape->view();
				echo "<hr><br>";
				if(!empty($_POST))
				{
					if($shape->validate($_POST))
					{
						echo $shape->shapeName."������ǣ�".$shape->area()."<br>";
						echo $shape->shapeName."���ܳ��ǣ�".$shape->perimeter()."<br>";
					}
				}
			}
			else
			{
				echo "��ѡ������ͼ�Σ�";
			}
		?>
	</body>
</html>
