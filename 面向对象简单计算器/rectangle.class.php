<?php 
	class Rectangle extends Shape
	{
		public $shapeName="长方形";
		public $height;
		public $width;

		function __construct($arr)
		{
			$this->height=$arr['height'];
			$this->width=$arr['width'];
		}

		function area()
		{
			return $this->height * $this->width;
		}

		function perimeter()
		{
			return 2 * ($this->height + $this->width);
		}

		function view()
		{
			$form='<form action="index.php?action=rectangle" method="post">';
			$form.=$this->shapeName.'的长：<input type="text" name="height" value="'.$_POST['height'].'" /><br>';
			$form.=$this->shapeName.'的宽：<input type="text" name="width" value="'.$_POST['width'].'" /><br>';
			$form.='<input type="submit" name="dosubmit" value="计算" /><br>';
			$form.='</form>';
			echo $form;
		}

		function validate($arr)
		{
			$flag=true;
			if($arr['height']<0||$arr['width']<0)
			{
				echo $shapeName."的长，宽不能小于0."."<br>";
				$flag=false;
				return $flag;
			}
			if($arr['height']==""||$arr['width']=="")
							{
				echo $shapeName."的长，宽不能为空！"."<br>";
				$flag=false;
				return $flag;
			}
			return $flag;
		}

	}
?>
