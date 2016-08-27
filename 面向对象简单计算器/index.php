<html>
	<head>
		<title>简单图形（周长&面积）计算器</title>
		<meta http-equiv="Content-type" content="text/html; charset=gb2312">
	</head>

	<body>
		<center>
			<h1>简单图形（周长&面积）计算器</h1>
			<a href="index.php?action=rectangle">矩形</a>||
			<a href="index.php?action=circle">圆形</a>
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
						echo $shape->shapeName."的面积是：".$shape->area()."<br>";
						echo $shape->shapeName."的周长是：".$shape->perimeter()."<br>";
					}
				}
			}
			else
			{
				echo "请选择计算的图形！";
			}
		?>
	</body>
</html>
