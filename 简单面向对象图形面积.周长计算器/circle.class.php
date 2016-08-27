<?php
	class Circle extends Shape
	{
		public $shapeName="圆形";
		public $radius;

		function __construct($arr)
		{
			$this->radius=$arr['radius'];
		}

		function area()
		{
			return 3.14 * $this->radius * $this->radius;
		}

		function perimeter()
		{
			return 2*3.14 * $this->radius;
		}

		function view()
		{
			$form='<form action="index.php?action=circle" method="post">';
			$form.=$this->shapeName.'的半径：<input type="text" name="radius" value="'.$_POST[radius].'"/><br>';
			$form.='<input type="submit" name="dosubmit" value="计算"/><br>';
			$form.='</form>';
			echo $form;
		}

		function validate($arr)
		{
			$flag=true;
			if($arr['radius']<=0)
			{
				echo $shapeName."的半径不能小于0！"."<br>";
				$flag=false;
				return $flag;
			}
			if($arr['radius']=="")
			{
				echo $shapeName."的半径不能为空！"."<br>";
				$flag=false;
				return $flag;
			}
			return $flag;
		}
	}

?>
